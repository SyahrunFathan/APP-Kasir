<?php

namespace App\Controllers;

use App\Models\ModelDetailPesanan;
use App\Models\ModelKategori;
use App\Models\ModelPesanan;
use App\Models\ModelProduk;
use App\Models\ModelUser;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;
    protected $modelKategori;
    protected $modelUser;
    protected $modelProduk;
    protected $modelPesanan;
    protected $modelDetailPesanan;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['form', 'url'];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->modelKategori        = new ModelKategori();
        $this->modelUser            = new ModelUser();
        $this->modelProduk          = new ModelProduk();
        $this->modelPesanan         = new ModelPesanan();
        $this->modelDetailPesanan   = new ModelDetailPesanan();
    }

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
    }
}
