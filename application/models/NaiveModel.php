<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NaiveModel extends MY_Model
{
    var $table = 'tbl_naive_bayes';
    public function __construct()
    {
        parent::__construct($this->table);
    }
}
