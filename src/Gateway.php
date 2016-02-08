<?php

namespace Omnipay\Ifthenpay;

use Omnipay\Common\AbstractGateway;

/**
 * IfthenPay
 *
 * @link http://www.ifthenpay.com
 */
class Gateway extends AbstractGateway
{
    
    public function getName()
    {
        return "IfthenPay";
    }

    public function getDefaultParameters()
    {
        return array(
            'Entidade' => '',
            'Subentidade' => '',
            'ChaveAntiPhishing' => '',
            'EnderecoCallback' => ''
        );
    }

    public function getEntidade()
    {
        return $this->getParameter('Entidade');
    }

    public function setEntidade($value)
    {
        return $this->setParameter('Entidade', $value);
    }

    public function getSubentidade()
    {
        return $this->getParameter('Subentidade');
    }

    public function setSubentidade($value)
    {
        return $this->setParameter('Subentidade', $value);
    }

    public function getChaveAntiPhishing()
    {
        return $this->getParameter('ChaveAntiPhishing');
    }

    public function setChaveAntiPhishing($value)
    {
        return $this->setParameter('ChaveAntiPhishing', $value);
    }

    public function getEnderecoCallback()
    {
        return $this->getParameter('EnderecoCallback');
    }

    public function setEnderecoCallback($value)
    {
        return $this->setParameter('EnderecoCallback', $value);
    }

    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Ifthenpay\Message\PurchaseRequest', $parameters);
    }
    
}
