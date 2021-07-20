<?php
namespace icequeen\sm\sm;
use icequeen\sm\smecc\SM4\Sm4;

class MySm4 {
    protected $sm4;

    function __construct() {
        $this->sm4 = new MySm4();
    }

    public function encrypt( $key, $data ) {
        // this is ecb
        return $this->sm4->encrypt( $key, $data );
    }

    public function decrypt( $key, $data ) {
        // this is ecb
        return $this->sm4->decrypt( $key, $data );
    }

    // @todo  cbc encrypt and ddecrypt
}
