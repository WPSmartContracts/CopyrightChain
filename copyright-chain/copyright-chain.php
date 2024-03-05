<?php
/*
Plugin Name: CopyrightChain
Description: NFT Copyright registration on the Blockchain
Version: 1.0.0
Author: WPSmartContracts.com
Text Domain: copyright-chain
Domain Path: /languages
License: GPLv2 or later
*/

if( ! defined( 'ABSPATH' ) ) die;

if ( ! defined("CRC_SEPOLIA_SMART_CONTRACT" ) ) {
    define("CRC_SEPOLIA_SMART_CONTRACT", "0xcA1A156BebEcF0e40E2e19248d8A1CE9da0f2ed0");
}

if ( ! defined("CRC_ENVIRONMENT" ) ) {
    define("CRC_ENVIRONMENT", "test");
}

function crc_notice(){
    if ( ! defined("CRC_NFT_STORAGE" ) ) {
    ?>
        <div class="notice notice-warning">
		    <p>
                <strong>CopyrightChain Important Notice:</strong> The NFT Storage Key is not set 
                <a href="https://nft.storage/" target="_blank">Click here to get a free NFT API key</a>
            </p>
		</div>
    <?php
    }
}
add_action('admin_notices', 'crc_notice');