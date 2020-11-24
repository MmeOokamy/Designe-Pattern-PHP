<?php


class FactureIterator implements Countable, Iterator
{
    protected $factures = [];
    protected  $counter = 0;

    public function __construct()
    {
    }

    public function addFacture($date, $amount, $label){
        $this->factures[] = (new FactureBuilder())
        ->addDate($date)
        ->addAmount($amount)
        ->addLabel($label)
            ->build();
    }

    public function removeFacture(Facture $removeFacture)
    {
        $removeLabel = $removeFacture->getLabel();

        $this->factures = array_filter($this->factures, function (Facture $factureCompare) use ($removeLabel){
            return $factureCompare->getLabel() !== $removeLabel;
        });
    }

    public function count(): int
    {
        return count($this->factures);
    }

    public function current(): Facture
    {
       return $this->factures[$this->counter];
    }

    public function key()
    {
        return $this->counter;
    }

    public function next()
    {
        $this->counter++;
    }

    public function rewind()
    {
        $this->counter = 0;
    }

    public function valid(): bool
    {
       return isset($this->factures[$this->counter]);
    }

}