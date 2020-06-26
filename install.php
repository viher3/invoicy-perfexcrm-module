<?php

defined('BASEPATH') or exit('No direct script access allowed');

$invoicyTable = db_prefix() . 'invoices_invoicy';

if (!$CI->db->table_exists($invoicyTable)) {
    $CI->db->query('CREATE TABLE `' . db_prefix() . 'invoices_invoicy` (
                      `id` int(11) NOT NULL,
                      `date` datetime NOT NULL,
                      `created_at` datetime NOT NULL,
                      `subtotal` decimal(15,2) NOT NULL,
                      `total_tax` decimal(15,2) NOT NULL,
                      `total` decimal(15,2) NOT NULL,
                      `clientid` int(11) NOT NULL,
                      `file` varchar(255) NOT NULL,
                      PRIMARY KEY (`id`)
                    ) ENGINE=InnoDB DEFAULT CHARSET=' . $CI->db->char_set . ';');
}
