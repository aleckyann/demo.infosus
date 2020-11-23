<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ui
{

    var $CI;

    function __construct()
    {
        $this->CI = &get_instance();
    }

    /**
     * Função checa se a página possui flashdatas e as renderiza automaticamente.
     * Argumentos: 'success', 'warning', 'danger', 'info' e 'help'
     **/
    public function alert_flashdata()
    {
        if ($this->CI->session->flashdata('success')) {
            echo '
                <div class="toast hide notice bg-success" id="cookie-notice" role="alert" data-options=\'{"autoShow":true}\' data-autohide="false" aria-live="assertive" aria-atomic="true">
                    <div class="toast-body d-lg-flex justify-content-center align-items-center text-center px-5"><button class="btn-close position-absolute top-0 right-0 p-2 mr-2" type="button" data-dismiss="toast" aria-label="Close"></button>
                        <p class="mb-2 mb-lg-0 text-white"> ' . $this->CI->session->flashdata('success') . '</p>
                    </div>
                </div>
            ';
        }

        if ($this->CI->session->flashdata('warning')) {
            echo '
                <div class="toast hide notice bg-warning" id="cookie-notice" role="alert" data-options=\'{"autoShow":true}\' data-autohide="false" aria-live="assertive" aria-atomic="true">
                    <div class="toast-body d-lg-flex justify-content-center align-items-center text-center px-5"><button class="btn-close position-absolute top-0 right-0 p-2 mr-2" type="button" data-dismiss="toast" aria-label="Close"></button>
                        <p class="mb-2 mb-lg-0 text-white"> ' . $this->CI->session->flashdata('warning') . '</p>
                    </div>
                </div>
            ';
        }

        if ($this->CI->session->flashdata('danger')) {
            echo '
                <div class="toast hide notice bg-danger" id="cookie-notice" role="alert" data-options=\'{"autoShow":true}\' data-autohide="false" aria-live="assertive" aria-atomic="true">
                    <div class="toast-body d-lg-flex justify-content-center align-items-center text-center px-5"><button class="btn-close position-absolute top-0 right-0 p-2 mr-2" type="button" data-dismiss="toast" aria-label="Close"></button>
                        <p class="mb-2 mb-lg-0 text-white"> ' . $this->CI->session->flashdata('danger') . '</p>
                    </div>
                </div>
            ';
        }

        if ($this->CI->session->flashdata('info')) {
            echo '
                <div class="toast hide notice bg-info" id="cookie-notice" role="alert" data-options=\'{"autoShow":true}\' data-autohide="false" aria-live="assertive" aria-atomic="true">
                    <div class="toast-body d-lg-flex justify-content-center align-items-center text-center px-5"><button class="btn-close position-absolute top-0 right-0 p-2 mr-2" type="button" data-dismiss="toast" aria-label="Close"></button>
                        <p class="mb-2 mb-lg-0 text-white"> ' . $this->CI->session->flashdata('info') . '</p>
                    </div>
                </div>
            ';
        }

        if ($this->CI->session->flashdata('help')) {
            echo '
                <div class="toast hide notice bg-dark" id="cookie-notice" role="alert" data-options=\'{"autoShow":true}\' data-autohide="false" aria-live="assertive" aria-atomic="true">
                    <div class="toast-body d-lg-flex justify-content-center align-items-center text-center px-5"><button class="btn-close position-absolute top-0 right-0 p-2 mr-2" type="button" data-dismiss="toast" aria-label="Close"></button>
                        <p class="mb-2 mb-lg-0 text-white"> ' . $this->CI->session->flashdata('warning') . '</p>
                    </div>
                </div>
            ';
        }
    }

    /**
     * Retorna disabled se os argumentos forem iguais (Uso em botões, inputs)
     **/
    public function disabled($disable, $disabled)
    {
        if ($disable == $disabled) {
            return 'disabled';
        } else {
            return 'not-hidden';
        }
    }

    /**
     * Retorna hidden se os argumentos forem iguais (Uso em elementos html)
     **/
    public function hidden($hidden, $hiddened)
    {
        if ($hidden == $hiddened) {
            return 'hidden';
        } else {
            return 'not-hidden';
        }
    }

    /**
     * Escreve checked se argumento for 'TRUE' (Uso em checkbox)
     **/
    public function checked($check)
    {
        if ($check) {
            return 'checked';
        } else {
            return 'not-checked';
        }
    }

    /**
     * Escreve selected se argumentos forem iguais. (Uso em <option>)
     **/
    public function selected($select, $selected)
    {
        if ($select == $selected) {
            return 'selected';
        } else {
            return 'not-selected';
        }
    }

    /**
     * Escreve active se argumentos forem iguais (Uso em breadcrumbs)
     **/
    function active($active, $actived)
    {
        if ($active == $actived) {
            return 'active';
        } else {
            return 'not-active';
        }
    }

    /**
     * Escreve colapsed se argumentos forem iguais (Uso em componentes css)
     **/
    function colapsed($colapse, $colapsed)
    {
        if ($colapse === $colapsed) {
            return 'class="colapsed"';
        } else {
            return 'class="collapse"';
        }
    }
}
