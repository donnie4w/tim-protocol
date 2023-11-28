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

class Tid
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'node',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'domain',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'resource',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'termtyp',
            'isRequired' => false,
            'type' => TType::BYTE,
        ),
        5 => array(
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
    );

    /**
     * @var string
     */
    public $node = null;
    /**
     * @var string
     */
    public $domain = null;
    /**
     * @var string
     */
    public $resource = null;
    /**
     * @var int
     */
    public $termtyp = null;
    /**
     * @var array
     */
    public $extend = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['node'])) {
                $this->node = $vals['node'];
            }
            if (isset($vals['domain'])) {
                $this->domain = $vals['domain'];
            }
            if (isset($vals['resource'])) {
                $this->resource = $vals['resource'];
            }
            if (isset($vals['termtyp'])) {
                $this->termtyp = $vals['termtyp'];
            }
            if (isset($vals['extend'])) {
                $this->extend = $vals['extend'];
            }
        }
    }

    public function getName()
    {
        return 'Tid';
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
                        $xfer += $input->readString($this->node);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->domain);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->resource);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::BYTE) {
                        $xfer += $input->readByte($this->termtyp);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::MAP) {
                        $this->extend = array();
                        $_size0 = 0;
                        $_ktype1 = 0;
                        $_vtype2 = 0;
                        $xfer += $input->readMapBegin($_ktype1, $_vtype2, $_size0);
                        for ($_i4 = 0; $_i4 < $_size0; ++$_i4) {
                            $key5 = '';
                            $val6 = '';
                            $xfer += $input->readString($key5);
                            $xfer += $input->readString($val6);
                            $this->extend[$key5] = $val6;
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
        $xfer += $output->writeStructBegin('Tid');
        if ($this->node !== null) {
            $xfer += $output->writeFieldBegin('node', TType::STRING, 1);
            $xfer += $output->writeString($this->node);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->domain !== null) {
            $xfer += $output->writeFieldBegin('domain', TType::STRING, 2);
            $xfer += $output->writeString($this->domain);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->resource !== null) {
            $xfer += $output->writeFieldBegin('resource', TType::STRING, 3);
            $xfer += $output->writeString($this->resource);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->termtyp !== null) {
            $xfer += $output->writeFieldBegin('termtyp', TType::BYTE, 4);
            $xfer += $output->writeByte($this->termtyp);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->extend !== null) {
            if (!is_array($this->extend)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('extend', TType::MAP, 5);
            $output->writeMapBegin(TType::STRING, TType::STRING, count($this->extend));
            foreach ($this->extend as $kiter7 => $viter8) {
                $xfer += $output->writeString($kiter7);
                $xfer += $output->writeString($viter8);
            }
            $output->writeMapEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
