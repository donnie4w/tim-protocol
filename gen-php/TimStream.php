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

class TimStream
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'id',
            'isRequired' => true,
            'type' => TType::I64,
        ),
        2 => array(
            'var' => 'VNode',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'dtype',
            'isRequired' => false,
            'type' => TType::BYTE,
        ),
        4 => array(
            'var' => 'body',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        5 => array(
            'var' => 'fromNode',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var int
     */
    public $id = null;
    /**
     * @var string
     */
    public $VNode = null;
    /**
     * @var int
     */
    public $dtype = null;
    /**
     * @var string
     */
    public $body = null;
    /**
     * @var string
     */
    public $fromNode = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['id'])) {
                $this->id = $vals['id'];
            }
            if (isset($vals['VNode'])) {
                $this->VNode = $vals['VNode'];
            }
            if (isset($vals['dtype'])) {
                $this->dtype = $vals['dtype'];
            }
            if (isset($vals['body'])) {
                $this->body = $vals['body'];
            }
            if (isset($vals['fromNode'])) {
                $this->fromNode = $vals['fromNode'];
            }
        }
    }

    public function getName()
    {
        return 'TimStream';
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
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->id);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->VNode);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::BYTE) {
                        $xfer += $input->readByte($this->dtype);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->body);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->fromNode);
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
        $xfer += $output->writeStructBegin('TimStream');
        if ($this->id !== null) {
            $xfer += $output->writeFieldBegin('id', TType::I64, 1);
            $xfer += $output->writeI64($this->id);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->VNode !== null) {
            $xfer += $output->writeFieldBegin('VNode', TType::STRING, 2);
            $xfer += $output->writeString($this->VNode);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->dtype !== null) {
            $xfer += $output->writeFieldBegin('dtype', TType::BYTE, 3);
            $xfer += $output->writeByte($this->dtype);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->body !== null) {
            $xfer += $output->writeFieldBegin('body', TType::STRING, 4);
            $xfer += $output->writeString($this->body);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->fromNode !== null) {
            $xfer += $output->writeFieldBegin('fromNode', TType::STRING, 5);
            $xfer += $output->writeString($this->fromNode);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
