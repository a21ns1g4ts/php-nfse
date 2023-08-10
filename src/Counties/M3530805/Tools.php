<?php

namespace NFePHP\NFSe\Counties\M3530805;

/**
 * Classe para a comunicação com os webservices da
 * Mogi Mirim - SP
 * conforme o modelo Abrasf 2.04
 *
 * @category  NFePHP
 * @package   NFePHP\NFSe\Counties\M3530805\Tools
 * @copyright NFePHP Copyright (c) 2016
 * @license   http://www.gnu.org/licenses/lgpl.txt LGPLv3+
 * @license   https://opensource.org/licenses/MIT MIT
 * @license   http://www.gnu.org/licenses/gpl.txt GPLv3+
 * @author    Maykon da S. de Siqueira <maykon at multilig dot com dot br>
 * @link      http://github.com/nfephp-org/sped-nfse for the canonical source repository
 */

use NFePHP\NFSe\Models\Abrasf\Tools as ToolsBase;

class Tools extends ToolsBase
{
    /**
     * Webservices URL
     * @var array
     */
    protected $url = [
        1 => 'https://mogimirim.meumunicipio.online/abrasf/ws?wsdl',
        2 => 'https://testemogimirim.meumunicipio.online/abrasf/ws?wsdl'
    ];
    /**
     * County Namespace
     * @var string
     */
    protected $xmlns = 'http://www.abrasf.org.br/nfse.xsd';
    /**
     * Soap Version
     * @var int
     */
    protected $soapversion = SOAP_1_1;

    /**
     * Soap Action
     * @var string
     */
    protected $soapAction = "https://testemogimirimabrasf.meumunicipio.online/ws/nfse";

    /**
     * SIAFI County Cod
     * @var int
     */
    protected $codcidade = 6717;

    /**
     * Encription signature algorithm
     * @var string
     */
    protected $algorithm = OPENSSL_ALGO_SHA1;
    /**
     * Version of schemas
     * @var int
     */
    protected $versao = 204;

    /**
     * Namespaces for soap envelope
     * @var array
     */
    protected $namespaces = [
        1 => [
            'xmlns:soapenv' => "http://schemas.xmlsoap.org/soap/envelope/",
            'xmlns:nfse'    => "https://mogimirim.meumunicipio.online/ws/nfse"
        ],
        2 => [
            'xmlns:soapenv' => "http://schemas.xmlsoap.org/soap/envelope/",
            'xmlns:nfse'    => "https://testemogimirimabrasf.meumunicipio.online/ws/nfse"
        ]        
    ];
}
