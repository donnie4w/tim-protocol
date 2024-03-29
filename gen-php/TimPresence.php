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

class TimPresence
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'id',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        2 => array(
            'var' => 'offline',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        3 => array(
            'var' => 'subStatus',
            'isRequired' => false,
            'type' => TType::BYTE,
        ),
        4 => array(
            'var' => 'fromTid',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Tid',
        ),
        5 => array(
            'var' => 'toTid',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Tid',
        ),
        6 => array(
            'var' => 'toList',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => array(
                'type' => TType::STRING,
                ),
        ),
        7 => array(
            'var' => 'show',
            'isRequired' => false,
            'type' => TType::I16,
        ),
        8 => array(
            'var' => 'status',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        9 => array(
            'var' => 'extend',
            'isRequired' => false,
            'type' => TType::MAP,
            'ktype' => TType::STRING,
            'vtype' => TType::STRING,
            'key' => array(
                'type' => TType::STRING,
            ),
            'val' => array(
                'type' => TType::STRING,
                ),
        ),
        10 => array(
            'var' => 'extra',
            'isRequired' => false,
            'type' => TType::MAP,
            'ktype' => TType::STRING,
            'vtype' => TType::STRING,
            'key' => array(
                'type' => TType::STRING,
            ),
            'val' => array(
                'type' => TType::STRING,
                ),
        ),
    );

    /**
     * @var int
     */
    public $id = null;
    /**
     * @var bool
     */
    public $offline = null;
    /**
     * @var int
     */
    public $subStatus = null;
    /**
     * @var \Tid
     */
    public $fromTid = null;
    /**
     * @var \Tid
     */
    public $toTid = null;
    /**
     * @var string[]
     */
    public $toList = null;
    /**
     * @var int
     */
    public $show = null;
    /**
     * @var string
     */
    public $status = null;
    /**
     * @var array
     */
    public $extend = null;
    /**
     * @var array
     */
    public $extra = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['id'])) {
                $this->id = $vals['id'];
            }
            if (isset($vals['offline'])) {
                $this->offline = $vals['offline'];
            }
            if (isset($vals['subStatus'])) {
                $this->subStatus = $vals['subStatus'];
            }
            if (isset($vals['fromTid'])) {
                $this->fromTid = $vals['fromTid'];
            }
            if (isset($vals['toTid'])) {
                $this->toTid = $vals['toTid'];
            }
            if (isset($vals['toList'])) {
                $this->toList = $vals['toList'];
            }
            if (isset($vals['show'])) {
                $this->show = $vals['show'];
            }
            if (isset($vals['status'])) {
                $this->status = $vals['status'];
            }
            if (isset($vals['extend'])) {
                $this->extend = $vals['extend'];
            }
            if (isset($vals['extra'])) {
                $this->extra = $vals['extra'];
            }
        }
    }

    public function getName()
    {
        return 'TimPresence';
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
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->offline);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::BYTE) {
                        $xfer += $input->readByte($this->subStatus);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRUCT) {
                        $this->fromTid = new \Tid();
                        $xfer += $this->fromTid->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::STRUCT) {
                        $this->toTid = new \Tid();
                        $xfer += $this->toTid->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::LST) {
                        $this->toList = array();
                        $_size68 = 0;
                        $_etype71 = 0;
                        $xfer += $input->readListBegin($_etype71, $_size68);
                        for ($_i72 = 0; $_i72 < $_size68; ++$_i72) {
                            $elem73 = null;
                            $xfer += $input->readString($elem73);
                            $this->toList []= $elem73;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::I16) {
                        $xfer += $input->readI16($this->show);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 8:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->status);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 9:
                    if ($ftype == TType::MAP) {
                        $this->extend = array();
                        $_size74 = 0;
                        $_ktype75 = 0;
                        $_vtype76 = 0;
                        $xfer += $input->readMapBegin($_ktype75, $_vtype76, $_size74);
                        for ($_i78 = 0; $_i78 < $_size74; ++$_i78) {
                            $key79 = '';
                            $val80 = '';
                            $xfer += $input->readString($key79);
                            $xfer += $input->readString($val80);
                            $this->extend[$key79] = $val80;
                        }
                        $xfer += $input->readMapEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 10:
                    if ($ftype == TType::MAP) {
                        $this->extra = array();
                        $_size81 = 0;
                        $_ktype82 = 0;
                        $_vtype83 = 0;
                        $xfer += $input->readMapBegin($_ktype82, $_vtype83, $_size81);
                        for ($_i85 = 0; $_i85 < $_size81; ++$_i85) {
                            $key86 = '';
                            $val87 = '';
                            $xfer += $input->readString($key86);
                            $xfer += $input->readString($val87);
                            $this->extra[$key86] = $val87;
                        }
                        $xfer += $input->readMapEnd();
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
        $xfer += $output->writeStructBegin('TimPresence');
        if ($this->id !== null) {
            $xfer += $output->writeFieldBegin('id', TType::I64, 1);
            $xfer += $output->writeI64($this->id);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->offline !== null) {
            $xfer += $output->writeFieldBegin('offline', TType::BOOL, 2);
            $xfer += $output->writeBool($this->offline);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->subStatus !== null) {
            $xfer += $output->writeFieldBegin('subStatus', TType::BYTE, 3);
            $xfer += $output->writeByte($this->subStatus);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->fromTid !== null) {
            if (!is_object($this->fromTid)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('fromTid', TType::STRUCT, 4);
            $xfer += $this->fromTid->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->toTid !== null) {
            if (!is_object($this->toTid)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('toTid', TType::STRUCT, 5);
            $xfer += $this->toTid->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->toList !== null) {
            if (!is_array($this->toList)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('toList', TType::LST, 6);
            $output->writeListBegin(TType::STRING, count($this->toList));
            foreach ($this->toList as $iter88) {
                $xfer += $output->writeString($iter88);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->show !== null) {
            $xfer += $output->writeFieldBegin('show', TType::I16, 7);
            $xfer += $output->writeI16($this->show);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->status !== null) {
            $xfer += $output->writeFieldBegin('status', TType::STRING, 8);
            $xfer += $output->writeString($this->status);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->extend !== null) {
            if (!is_array($this->extend)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('extend', TType::MAP, 9);
            $output->writeMapBegin(TType::STRING, TType::STRING, count($this->extend));
            foreach ($this->extend as $kiter89 => $viter90) {
                $xfer += $output->writeString($kiter89);
                $xfer += $output->writeString($viter90);
            }
            $output->writeMapEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->extra !== null) {
            if (!is_array($this->extra)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('extra', TType::MAP, 10);
            $output->writeMapBegin(TType::STRING, TType::STRING, count($this->extra));
            foreach ($this->extra as $kiter91 => $viter92) {
                $xfer += $output->writeString($kiter91);
                $xfer += $output->writeString($viter92);
            }
            $output->writeMapEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
