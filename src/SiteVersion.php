<?php
class SiteVersion
{ 
    public function readVersionFromFile($filename)
    {
        return file_get_contents($filename);
    }
}