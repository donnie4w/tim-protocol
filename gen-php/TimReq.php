<?php
/**
 * Autogenerated by Thrift Compiler (0.19.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class TimReq
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'rtype',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        2 => array(
            'var' => 'node',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'node2',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'reqInt',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        5 => array(
            'var' => 'reqInt2',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        6 => array(
            'var' => 'reqStr',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        7 => array(
            'var' => 'reqStr2',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var int
     */
    public $rtype = null;
    /**
     * @var string
     */
    public $node = null;
    /**
     * @var string
     */
    public $node2 = null;
    /**
     * @var int
     */
    public $reqInt = null;
    /**
     * @var int
     */
    public $reqInt2 = null;
    /**
     * @var string
     */
    public $reqStr = null;
    /**
     * @var string
     */
    public $reqStr2 = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['rtype'])) {
                $this->rtype = $vals['rtype'];
            }
            if (isset($vals['node'])) {
                $this->node = $vals['node'];
            }
            if (isset($vals['node2'])) {
                $this->node2 = $vals['node2'];
            }
            if (isset($vals['reqInt'])) {
                $this->reqInt = $vals['reqInt'];
            }
            if (isset($vals['reqInt2'])) {
                $this->reqInt2 = $vals['reqInt2'];
            }
            if (isset($vals['reqStr'])) {
                $this->reqStr = $vals['reqStr'];
            }
            if (isset($vals['reqStr2'])) {
                $this->reqStr2 = $vals['reqStr2'];
            }
        }
    }

    public function getName()
    {
        return 'TimReq';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->rtype);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->node);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->node2);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->reqInt);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->reqInt2);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->reqStr);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->reqStr2);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('TimReq');
        if ($this->rtype !== null) {
            $xfer += $output->writeFieldBegin('rtype', TType::I32, 1);
            $xfer += $output->writeI32($this->rtype);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->node !== null) {
            $xfer += $output->writeFieldBegin('node', TType::STRING, 2);
            $xfer += $output->writeString($this->node);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->node2 !== null) {
            $xfer += $output->writeFieldBegin('node2', TType::STRING, 3);
            $xfer += $output->writeString($this->node2);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->reqInt !== null) {
            $xfer += $output->writeFieldBegin('reqInt', TType::I64, 4);
            $xfer += $output->writeI64($this->reqInt);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->reqInt2 !== null) {
            $xfer += $output->writeFieldBegin('reqInt2', TType::I64, 5);
            $xfer += $output->writeI64($this->reqInt2);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->reqStr !== null) {
            $xfer += $output->writeFieldBegin('reqStr', TType::STRING, 6);
            $xfer += $output->writeString($this->reqStr);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->reqStr2 !== null) {
            $xfer += $output->writeFieldBegin('reqStr2', TType::STRING, 7);
            $xfer += $output->writeString($this->reqStr2);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
