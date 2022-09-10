<?php

declare(strict_types=1);

namespace Devpark\Transfers24\Forms;

use Devpark\Transfers24\Contracts\Form;

class ReceiveForm extends AbstractForm implements Form
{
    private $received_parameters;

    public function getUri(): string
    {
        return 'transaction/verify';
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getReceiveParameters():array
    {
        return $this->received_parameters;
    }

    public function getPostData():array
    {
        return $this->postData;
    }

    /**
     * @param mixed $received_parameters
     */
    public function setReceivedParameters($received_parameters): void
    {
        $this->received_parameters = $received_parameters;
    }
}
