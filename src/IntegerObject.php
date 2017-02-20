<?php
namespace Tayron;

use \InvalidArgumentException;

/**
 * Classe para gerenciamento de números inteiros
 * 
 * @author Tayron Miranda <dev@tayron.com.br>
 */
class IntegerObject
{
    /**
     * Atributo que armazena um número
     * 
     * @var integer
     */
	private $integer;

    /**
     * IntegerObject::__construct
     * 
     * Armazena o parametro informado pelo usuário como inteiro
     * 
     * @param integer $integer Número informado pelo usuário
     * @throws InvalidArgumentException Dispara uma exceção caso o parametro informado não seja um número
     * 
     * @return void
     */
	public function __construct($integer)	
	{
		if(!is_numeric($integer)){
			throw new InvalidArgumentException('Não é possível criar objeto com parametro informado, o parametro informado não é um número');
		}
		
		$this->integer = (int)$integer;
	}
	
    /**
     * IntegerObject::isEquals
     * 
     * Método que verifica se o conteúdo do objeto corrente é igual ao do objeto Integer informado
     * 
     * @param IntegerObject $integer Objeto Integer informado pelo usuário
     * 
     * @return boolean Retorna true se o conteúdo for igual ou false
     */
	public function isEquals(IntegerObject $integer)
	{
		return ($this == $integer);
	}
	
    /**
     * IntegerObject::parseStringObject
     * 
     * Método que converte um objeto IntegerObject em StringObject
     * 
     * @return TextObject Objeto convertido em String
     */
	public function parseStringObject()
	{
	    return new StringObject($this->integer);
	}
	
    /**
     * IntegerObject::parseFloatObject
     * 
     * Método que converte um objeto IntegerObject em FloatObject
     * 
     * @return FloatObject Objeto convertido em String
     */
	public function parseFloatObject()
	{
	    return new FloatObject($this->integer);
	}
    
    /**
     * IntegerObject::addition
     * 
     * Método que realiza a soma do número armazenado com o parametro informado pelo usuário
     * 
     * @param IntegerObject $integer Número a ser somado
     * 
     * @return void
     */
	public function addition(IntegerObject $integer)
	{
	    $this->integer = $this->integer + $integer->getValue();
	}
	
    /**
     * IntegerObject::subtract
     * 
     * Método que realiza a subtração do número armazenado com o parametro informado pelo usuário
     * 
     * @param IntegerObject $integer Número a ser usado na operação
     * 
     * @return void
     */
	public function subtract(IntegerObject $integer)
	{
	    $this->integer = $this->integer - $integer->getValue();
	}	
    
    /**
     * IntegerObject::multiply
     * 
     * Método que realiza a multiplicação do número armazenado com o parametro informado pelo usuário
     * 
     * @param IntegerObject $integer Número a ser usado na operação
     * 
     * @return void
     */
	public function multiply(IntegerObject $integer)
	{
	    $this->integer = $this->integer * $integer->getValue();
	}    
    
    /**
     * IntegerObject::division
     * 
     * Método que realiza a divisão do número armazenado com o parametro informado pelo usuário
     * 
     * @param IntegerObject $integer Número a ser usado na operação
     * @throws InvalidArgumentException Dispara uma exceção caso o parametro informado seja 0
     * 
     * @return void
     */
	public function division(IntegerObject $integer)
	{
		if($integer->isEquals(new IntegerObject(0))){
			throw new InvalidArgumentException('Não foi possível dividir pelo o valor, pois o parametro informado é 0');
		}
		
	    $this->integer = $this->integer / $integer->getValue();
	}    
    
    /**
     * IntegerObject::module
     * 
     * Método que realiza a divisão até que reste apenas o resto da divisão
     * 
     * @param IntegerObject $integer Número a ser usado na operação
     * 
     * @return void
     */    
    public function module(IntegerObject $integer)
    {
        $this->integer %= $integer->getValue();
    }
    
    /**
     * IntegerObject::module
     * 
     * Método que realiza operação de exponenciação de um número informado
     * 
     * @param IntegerObject $integer Número a ser usado na operação
     * 
     * @return void
     */   
    public function exponentiation(IntegerObject $integer)
    {
        $this->integer **= $integer->getValue();
    }
    
    /**
     * IntegerObject::getValue
     * 
     * Método que retorna o valor puro do número do objeto
     * 
     * @return integer Valor do conteúdo do objeto em texto
     */
    public function getValue()
    {
        return (int)$this->integer;
    }

    /**
     * IntegerObject::__toString
     * 
     * Método que retorna o valor do conteúdo do objeto em forma de texto
     * 
     * @return integer Valor do conteúdo do objeto em texto
     */
	public function __toString()
	{
		return (int)$this->integer;
	}	
}