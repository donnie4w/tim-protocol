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

class TimNodes
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'ntype',
            'isRequired' => true,
            'type' => TType::I32,
        ),
        2 => array(
            'var' => 'nodelist',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => array(
                'type' => TType::STRING,
                ),
        ),
        3 => array(
            'var' => 'usermap',
            'isRequired' => false,
            'type' => TType::MAP,
            'ktype' => TType::STRING,
            'vtype' => TType::STRUCT,
            'key' => array(
                'type' => TType::STRING,
            ),
            'val' => array(
                'type' => TType::STRUCT,
                'class' => '\TimUserBean',
                ),
        ),
        4 => array(
            'var' => 'roommap',
            'isRequired' => false,
            'type' => TType::MAP,
            'ktype' => TType::STRING,
            'vtype' => TType::STRUCT,
            'key' => array(
                'type' => TType::STRING,
            ),
            'val' => array(
                'type' => TType::STRUCT,
                'class' => '\TimRoomBean',
                ),
        ),
        5 => array(
            'var' => 'node',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var int
     */
    public $ntype = null;
    /**
     * @var string[]
     */
    public $nodelist = null;
    /**
     * @var array
     */
    public $usermap = null;
    /**
     * @var array
     */
    public $roommap = null;
    /**
     * @var string
     */
    public $node = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['ntype'])) {
                $this->ntype = $vals['ntype'];
            }
            if (isset($vals['nodelist'])) {
                $this->nodelist = $vals['nodelist'];
            }
            if (isset($vals['usermap'])) {
                $this->usermap = $vals['usermap'];
            }
            if (isset($vals['roommap'])) {
                $this->roommap = $vals['roommap'];
            }
            if (isset($vals['node'])) {
                $this->node = $vals['node'];
            }
        }
    }

    public function getName()
    {
        return 'TimNodes';
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
                        $xfer += $input->readI32($this->ntype);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::LST) {
                        $this->nodelist = array();
                        $_size111 = 0;
                        $_etype114 = 0;
                        $xfer += $input->readListBegin($_etype114, $_size111);
                        for ($_i115 = 0; $_i115 < $_size111; ++$_i115) {
                            $elem116 = null;
                            $xfer += $input->readString($elem116);
                            $this->nodelist []= $elem116;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::MAP) {
                        $this->usermap = array();
                        $_size117 = 0;
                        $_ktype118 = 0;
                        $_vtype119 = 0;
                        $xfer += $input->readMapBegin($_ktype118, $_vtype119, $_size117);
                        for ($_i121 = 0; $_i121 < $_size117; ++$_i121) {
                            $key122 = '';
                            $val123 = new \TimUserBean();
                            $xfer += $input->readString($key122);
                            $val123 = new \TimUserBean();
                            $xfer += $val123->read($input);
                            $this->usermap[$key122] = $val123;
                        }
                        $xfer += $input->readMapEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::MAP) {
                        $this->roommap = array();
                        $_size124 = 0;
                        $_ktype125 = 0;
                        $_vtype126 = 0;
                        $xfer += $input->readMapBegin($_ktype125, $_vtype126, $_size124);
                        for ($_i128 = 0; $_i128 < $_size124; ++$_i128) {
                            $key129 = '';
                            $val130 = new \TimRoomBean();
                            $xfer += $input->readString($key129);
                            $val130 = new \TimRoomBean();
                            $xfer += $val130->read($input);
                            $this->roommap[$key129] = $val130;
                        }
                        $xfer += $input->readMapEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->node);
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
        $xfer += $output->writeStructBegin('TimNodes');
        if ($this->ntype !== null) {
            $xfer += $output->writeFieldBegin('ntype', TType::I32, 1);
            $xfer += $output->writeI32($this->ntype);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->nodelist !== null) {
            if (!is_array($this->nodelist)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('nodelist', TType::LST, 2);
            $output->writeListBegin(TType::STRING, count($this->nodelist));
            foreach ($this->nodelist as $iter131) {
                $xfer += $output->writeString($iter131);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->usermap !== null) {
            if (!is_array($this->usermap)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('usermap', TType::MAP, 3);
            $output->writeMapBegin(TType::STRING, TType::STRUCT, count($this->usermap));
            foreach ($this->usermap as $kiter132 => $viter133) {
                $xfer += $output->writeString($kiter132);
                $xfer += $viter133->write($output);
            }
            $output->writeMapEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->roommap !== null) {
            if (!is_array($this->roommap)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('roommap', TType::MAP, 4);
            $output->writeMapBegin(TType::STRING, TType::STRUCT, count($this->roommap));
            foreach ($this->roommap as $kiter134 => $viter135) {
                $xfer += $output->writeString($kiter134);
                $xfer += $viter135->write($output);
            }
            $output->writeMapEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->node !== null) {
            $xfer += $output->writeFieldBegin('node', TType::STRING, 5);
            $xfer += $output->writeString($this->node);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
