<?php
namespace UMC\model;

/**
 * Use for get Directory information in WP repository
 */
class Directory {

    //type string
    public $base;
    //type array
    public $directories;

    public function __construct(string $base, array $directories = []) {
        $this->base = $base;
        $this->directories = $directories;
    }

    public function addDirectory(string $directory) {
        if (!empty($directory)) {
            $this->directories[] = $directory;
        }
    }

    public function deleteDuplicate() {
        array_unique($this->directories);
    }

}
