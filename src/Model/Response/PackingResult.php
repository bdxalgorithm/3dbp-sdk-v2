<?php

namespace ThreeDBinPacking\Model\Response;

//<editor-fold defaultstate="collapsed" desc="Use block.">
/**
 * Description of PackingResult
 *
 * @author Albert Rybacki <rybacki.albert@gmail.com>
 */
// </editor-fold>

class PackingResult
{
    protected $id;
    protected $packedBins;
    protected $errors = [];
    protected $status;
    protected $responseCode;
    protected $responseTime;
    protected $isResponseValid;
    protected $notPackedItems = [];

    public function getId() {
        return $this->id;
    }
    
    public function getPackedBins() {
        return $this->packedBins;
    }

    public function getErrors() {
        return $this->errors;
    }

    public function getStatus() {
        return $this->status;
    }
    
    public function getResponseTime() {
        return $this->responseTime;
    }
    
    public function getResponseCode() {
        return $this->responseCode;
    }
    
    public function getNotPackedItems() {
        return $this->notPackedItems;
    }
    
    public function addNotPackedItems($items){
        $this->notPackedItems[] = $items;
    }

    public function isResponseValid() {
        return $this->isResponseValid;
    }
    
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setPackedBins($packedBins) {
        $this->packedBins = $packedBins;
        return $this;
    }

    public function setErrors($errors) {
        $this->errors = $errors;
        return $this;
    }

    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    public function setIsResponseValid($isResponseValid) {
        $this->isResponseValid = $isResponseValid;
        return $this;
    }

    public function setResponseTime($responseTime) {
        $this->responseTime = $responseTime;
    }
    
    public function setResponseCode($responseCode) {
        $this->responseCode = $responseCode;
    }
    
}