<?php
/**
 * Autogenerated by Thrift Compiler (0.18.1)
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

class TimRoomBean
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'founder',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'managers',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => array(
                'type' => TType::STRING,
                ),
        ),
        3 => array(
            'var' => 'cover',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'topic',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        5 => array(
            'var' => 'label',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        6 => array(
            'var' => 'gtype',
            'isRequired' => false,
            'type' => TType::BYTE,
        ),
        7 => array(
            'var' => 'createtime',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        8 => array(
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
        9 => array(
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
     * @var string
     */
    public $founder = null;
    /**
     * @var string[]
     */
    public $managers = null;
    /**
     * @var string
     */
    public $cover = null;
    /**
     * @var string
     */
    public $topic = null;
    /**
     * @var string
     */
    public $label = null;
    /**
     * @var int
     */
    public $gtype = null;
    /**
     * @var int
     */
    public $createtime = null;
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
            if (isset($vals['founder'])) {
                $this->founder = $vals['founder'];
            }
            if (isset($vals['managers'])) {
                $this->managers = $vals['managers'];
            }
            if (isset($vals['cover'])) {
                $this->cover = $vals['cover'];
            }
            if (isset($vals['topic'])) {
                $this->topic = $vals['topic'];
            }
            if (isset($vals['label'])) {
                $this->label = $vals['label'];
            }
            if (isset($vals['gtype'])) {
                $this->gtype = $vals['gtype'];
            }
            if (isset($vals['createtime'])) {
                $this->createtime = $vals['createtime'];
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
        return 'TimRoomBean';
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
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->founder);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::LST) {
                        $this->managers = array();
                        $_size34 = 0;
                        $_etype37 = 0;
                        $xfer += $input->readListBegin($_etype37, $_size34);
                        for ($_i38 = 0; $_i38 < $_size34; ++$_i38) {
                            $elem39 = null;
                            $xfer += $input->readString($elem39);
                            $this->managers []= $elem39;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->cover);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->topic);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->label);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::BYTE) {
                        $xfer += $input->readByte($this->gtype);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->createtime);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 8:
                    if ($ftype == TType::MAP) {
                        $this->extend = array();
                        $_size40 = 0;
                        $_ktype41 = 0;
                        $_vtype42 = 0;
                        $xfer += $input->readMapBegin($_ktype41, $_vtype42, $_size40);
                        for ($_i44 = 0; $_i44 < $_size40; ++$_i44) {
                            $key45 = '';
                            $val46 = '';
                            $xfer += $input->readString($key45);
                            $xfer += $input->readString($val46);
                            $this->extend[$key45] = $val46;
                        }
                        $xfer += $input->readMapEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 9:
                    if ($ftype == TType::MAP) {
                        $this->extra = array();
                        $_size47 = 0;
                        $_ktype48 = 0;
                        $_vtype49 = 0;
                        $xfer += $input->readMapBegin($_ktype48, $_vtype49, $_size47);
                        for ($_i51 = 0; $_i51 < $_size47; ++$_i51) {
                            $key52 = '';
                            $val53 = '';
                            $xfer += $input->readString($key52);
                            $xfer += $input->readString($val53);
                            $this->extra[$key52] = $val53;
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
        $xfer += $output->writeStructBegin('TimRoomBean');
        if ($this->founder !== null) {
            $xfer += $output->writeFieldBegin('founder', TType::STRING, 1);
            $xfer += $output->writeString($this->founder);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->managers !== null) {
            if (!is_array($this->managers)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('managers', TType::LST, 2);
            $output->writeListBegin(TType::STRING, count($this->managers));
            foreach ($this->managers as $iter54) {
                $xfer += $output->writeString($iter54);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->cover !== null) {
            $xfer += $output->writeFieldBegin('cover', TType::STRING, 3);
            $xfer += $output->writeString($this->cover);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->topic !== null) {
            $xfer += $output->writeFieldBegin('topic', TType::STRING, 4);
            $xfer += $output->writeString($this->topic);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->label !== null) {
            $xfer += $output->writeFieldBegin('label', TType::STRING, 5);
            $xfer += $output->writeString($this->label);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->gtype !== null) {
            $xfer += $output->writeFieldBegin('gtype', TType::BYTE, 6);
            $xfer += $output->writeByte($this->gtype);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->createtime !== null) {
            $xfer += $output->writeFieldBegin('createtime', TType::I64, 7);
            $xfer += $output->writeI64($this->createtime);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->extend !== null) {
            if (!is_array($this->extend)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('extend', TType::MAP, 8);
            $output->writeMapBegin(TType::STRING, TType::STRING, count($this->extend));
            foreach ($this->extend as $kiter55 => $viter56) {
                $xfer += $output->writeString($kiter55);
                $xfer += $output->writeString($viter56);
            }
            $output->writeMapEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->extra !== null) {
            if (!is_array($this->extra)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('extra', TType::MAP, 9);
            $output->writeMapBegin(TType::STRING, TType::STRING, count($this->extra));
            foreach ($this->extra as $kiter57 => $viter58) {
                $xfer += $output->writeString($kiter57);
                $xfer += $output->writeString($viter58);
            }
            $output->writeMapEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}