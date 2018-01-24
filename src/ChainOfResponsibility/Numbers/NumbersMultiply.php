<?php
namespace DesignPatterns\ChainOfResponsibility\Numbers;

use DesignPatterns\ChainOfResponsibility\Numbers\Chain;

/**
 * Multiply numbers chain link class
 */
class NumbersMultiply extends Chain
{
    public function calculate(Numbers $request)
    {
        if($request->getCalcType() == 'mul') {
            $result = $request->getNum1() * $request->getNum2();
            echo 'Mnożenie: '.$request->getNum1().' * '.$request->getNum2().' = '.$result;
            return $result;
        }
        
        $this->nextChainElement->calculate($request);
    }
}
