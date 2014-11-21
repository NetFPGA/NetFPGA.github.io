<?php
header('Content-type: application/vnd.google-earth.kml+xml');
// It will be called map.kml
header('Content-Disposition: attachment; filename="map.kml"');

echo '<?xml version="1.0" encoding="UTF-8" standalone="no"?>';

require_once 'includes/event_content.php';
require_once 'absolute_url.php';
$document_root = "http://netfpga.org";

// an event object is an array with these contents in this order
#Title(0), Sort Date(1), Date(2), Location(3), Goal(4), Host(5), Webpage(6)

class GeoCoder {
    private $num_queries = 0;
    // switch API for every 10 queries
    private $google_limit = 2;
    private $query_cycle = 20;
    
    public function getCoordinatesFromGoogle($location) {
        $this->num_queries++;
        $json = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.str_replace(' ','+',$location).'&sensor=false');
        $buffer = json_decode($json, true);
        if ($buffer['status'] != 'OK') {
            return $buffer['status'];
        }
        $buffer = $buffer['results'][0]['geometry']['location'];
        return $buffer['lng'].','.$buffer['lat'];
    }
    public function getCoordinatesFromYahoo($location) {
        $this->num_queries++;
        $xml = simplexml_load_file('http://where.yahooapis.com/geocode?q='.str_replace(' ','+',$location));
        if ($xml->Error != '0') {
            return $xml->ErrorMessage;
        }
        $xml = $xml->Result[0];
        return $xml->longitude.','.$xml->latitude;
    }
    public function getCoordinates($location) {
        if ($this->num_queries >= $this->query_cycle) {
            $this->num_queries = 0;
        }
        if ($this->num_queries <= $this->google_limit) {
            return $this->getCoordinatesFromGoogle($location);
        }
        return $this->getCoordinatesFromYahoo($location);
    }
}
class Event {
    public $data;
    private $type;
    public function __construct($data, $type = 'upcoming') {
        $this->data = $data; $this->type = $type;
    }
    public function getType() { return $this->type; }
}
class EventList {
    private $events = array();
    private $type = 'past';
    public function addEvent($event) {
        if ($event->getType() != 'past') {
            $this->type = $event->getType();
        }
        array_push($this->events, $event);
    }
    public function getList() { return $this->events; }
    public function getType() { return $this->type; }
}   
// an event object is an array with these contents in this order
#Title(0), Sort Date(1), Date(2), Location(3), Goal(4), Host(5), Webpage(6)

class LocationList {
    private $locations = array(); // each location is an event list
    
    public function __construct($type = 'upcoming') {
        $this->type = $type;
    }
    public function addEvent($event) {
        if (is_null($this->locations[$event->data[3]]))
            $this->locations[$event->data[3]] = new EventList();
        $this->locations[$event->data[3]]->addEvent($event);
    }
    public function getList() { return $this->locations; }
    public function printPlacemarks($style = null) {
        
        $geocoder = new GeoCoder();
        foreach ($this->locations as $location => $eventList) {
            $style = $eventList->getType();
            $events = $eventList->getList();
            $coordinates = $geocoder->getCoordinates($location);
            if (is_null($coordinates))
                continue;
            echo "\n".'<Placemark>';
            echo '<name>'.$location.'</name>';
            if (!is_null($style) && $style != "") { echo '<styleUrl>#'.$style.'</styleUrl>'; }
            echo '<description><![CDATA[ <ul>';
            foreach ($events as $event) {
              echo '<li><a href="'.toAbsoluteURL($event->data[6], $GLOBALS['document_root']).'">'.$event->data[0].'</a></li>';
              echo '<ul><li>'.$event->data[2].'</li></ul>';
            }
            echo '</ul>]]></description>';
            echo '<Point><coordinates>'.$coordinates.'</coordinates></Point>';
            echo '</Placemark>';
        }
    }
}
$locationList = new LocationList();
foreach ($contest_upcoming as $contest) { $locationList->addEvent(new Event($contest, 'upcoming')); }
foreach ($dev_upcoming as $dev) { $locationList->addEvent(new Event($dev, 'upcoming')); }
foreach ($camp_upcoming as $camp) { $locationList->addEvent(new Event($camp, 'upcoming')); }
foreach ($tutorial_upcoming as $tutorial) { $locationList->addEvent(new Event($tutorial, 'upcoming')); }

foreach ($contest_past as $contest) { $locationList->addEvent(new Event($contest, 'past')); }
foreach ($dev_past as $dev) { $locationList->addEvent(new Event($dev, 'past')); }
foreach ($camp_past as $camp) { $locationList->addEvent(new Event($camp, 'past')); }
foreach ($tutorial_past as $tutorial) { $locationList->addEvent(new Event($tutorial, 'past')); }

?>
<kml xmlns="http://www.opengis.net/kml/2.2" xmlns:atom="http://www.w3.org/2005/Atom" xmlns:gx="http://www.google.com/kml/ext/2.2" xmlns:kml="http://www.opengis.net/kml/2.2">
<Document>
<name>NetFPGA Event Map</name>
<Style id="upcoming">
      <IconStyle>
         <Icon>
            <href>http://www.google.com/intl/en_us/mapfiles/ms/icons/red-dot.png</href>
         </Icon>
      </IconStyle>
</Style>
<Style id="past">
    <IconStyle>
         <Icon>
            <href>http://www.google.com/intl/en_us/mapfiles/ms/icons/blue-dot.png</href>
         </Icon>
    </IconStyle>
</Style>
<?php
// upcoming list
$locationList->printPlacemarks();
?>

</Document>
</kml>
