<?php
/**
 * Created by PhpStorm.
 * User: USER PC
 * Date: 10/11/2018
 * Time: 4:48 PM
 */

namespace App\Models;


use App\Lib\BaseTable;
use Illuminate\Pagination\Paginator;
use Laminas\Db\Sql\Select;
use Laminas\Paginator\Adapter\DbSelect;
use Laminas\Paginator\Paginator as PaginatorPaginator;

class InvoiceTransactionTable extends BaseTable {

    protected $tableName = 'invoice_transactions';
    //protected $primary = 'invoice_transaction_id';

    public function transactionExists($tid){
        $total = $this->tableGateway->select(['invoice_transaction_id'=>$tid])->count();
        if(empty($total)){
            return false;
        }
        else{
            return true;
        }
    }

    public function getPaginatedRecords($paginated=false,$id=null)
    {
        $select = new Select($this->tableName);
        $select->order($this->primary.' desc');
        $select->join($this->getPrefix().'invoices',$this->tableName.'.invoice_id=invoice.invoice_id')
            ->join($this->getPrefix().'students','invoice.student_id=student.student_id',['first_name','last_name','email'])
            ->join($this->getPrefix().'payment_methods','invoice.payment_method_id=payment_method.payment_method_id',['payment_methods']);

        if($paginated)
        {
            $paginatorAdapter = new Select($select,$this->tableGateway->getAdapter());
            $paginator = new PaginatorPaginator($paginatorAdapter);
            return $paginator;
        }

        $resultSet = $this->tableGateway->selectWith($select);
        return $resultSet;
    }


}
