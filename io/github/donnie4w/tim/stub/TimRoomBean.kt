/**
 * Autogenerated by Thrift Compiler (0.18.1)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
@file:Suppress("ClassName", "PropertyName", "RedundantUnitReturnType", "NestedLambdaShadowedImplicitParameter", "RemoveRedundantQualifierName")
package io.github.donnie4w.tim.stub

data class TimRoomBean(
  var founder: kotlin.String? = null,
  var managers: kotlin.collections.List<kotlin.String>? = null,
  var cover: kotlin.String? = null,
  var topic: kotlin.String? = null,
  var label: kotlin.String? = null,
  var gtype: kotlin.Byte? = null,
  var createtime: kotlin.Long? = null,
  var extend: kotlin.collections.Map<kotlin.String, kotlin.String>? = null,
  var extra: kotlin.collections.Map<kotlin.String, kotlin.ByteArray>? = null
) : org.apache.thrift.TBase<TimRoomBean, TimRoomBean._Fields> {
  enum class _Fields(private val thriftFieldId: kotlin.Short, private val fieldName: kotlin.String) : org.apache.thrift.TFieldIdEnum {
    FOUNDER(1, "founder"),
    MANAGERS(2, "managers"),
    COVER(3, "cover"),
    TOPIC(4, "topic"),
    LABEL(5, "label"),
    GTYPE(6, "gtype"),
    CREATETIME(7, "createtime"),
    EXTEND(8, "extend"),
    EXTRA(9, "extra");

    override fun getThriftFieldId() = thriftFieldId

    override fun getFieldName() = fieldName

    companion object {
      @kotlin.jvm.JvmStatic
      fun findByValue(value: kotlin.Int): _Fields? {
        return when (value) {
          1 -> FOUNDER
          2 -> MANAGERS
          3 -> COVER
          4 -> TOPIC
          5 -> LABEL
          6 -> GTYPE
          7 -> CREATETIME
          8 -> EXTEND
          9 -> EXTRA
          else -> null
        }
      }

      @kotlin.jvm.JvmStatic
      fun findByName(name: kotlin.String): _Fields? {
        return when (name) {
          "founder" -> FOUNDER
          "managers" -> MANAGERS
          "cover" -> COVER
          "topic" -> TOPIC
          "label" -> LABEL
          "gtype" -> GTYPE
          "createtime" -> CREATETIME
          "extend" -> EXTEND
          "extra" -> EXTRA
          else -> null
        }
      }
    }
  }

  companion object {
    private val STRUCT_DESC: org.apache.thrift.protocol.TStruct = org.apache.thrift.protocol.TStruct("TimRoomBean")
    private val FOUNDER_FIELD_DESC: org.apache.thrift.protocol.TField = org.apache.thrift.protocol.TField("founder", org.apache.thrift.protocol.TType.STRING, 1)
    private val FOUNDER_FIELD_META_DATA: org.apache.thrift.meta_data.FieldMetaData = org.apache.thrift.meta_data.FieldMetaData(
      "founder",
      org.apache.thrift.TFieldRequirementType.OPTIONAL,
      org.apache.thrift.meta_data.FieldValueMetaData(org.apache.thrift.protocol.TType.STRING),
      emptyMap())
    private val MANAGERS_FIELD_DESC: org.apache.thrift.protocol.TField = org.apache.thrift.protocol.TField("managers", org.apache.thrift.protocol.TType.LIST, 2)
    private val MANAGERS_FIELD_META_DATA: org.apache.thrift.meta_data.FieldMetaData = org.apache.thrift.meta_data.FieldMetaData(
      "managers",
      org.apache.thrift.TFieldRequirementType.OPTIONAL,
      org.apache.thrift.meta_data.ListMetaData(org.apache.thrift.protocol.TType.LIST,
        org.apache.thrift.meta_data.FieldValueMetaData(org.apache.thrift.protocol.TType.STRING)),
      emptyMap())
    private val COVER_FIELD_DESC: org.apache.thrift.protocol.TField = org.apache.thrift.protocol.TField("cover", org.apache.thrift.protocol.TType.STRING, 3)
    private val COVER_FIELD_META_DATA: org.apache.thrift.meta_data.FieldMetaData = org.apache.thrift.meta_data.FieldMetaData(
      "cover",
      org.apache.thrift.TFieldRequirementType.OPTIONAL,
      org.apache.thrift.meta_data.FieldValueMetaData(org.apache.thrift.protocol.TType.STRING),
      emptyMap())
    private val TOPIC_FIELD_DESC: org.apache.thrift.protocol.TField = org.apache.thrift.protocol.TField("topic", org.apache.thrift.protocol.TType.STRING, 4)
    private val TOPIC_FIELD_META_DATA: org.apache.thrift.meta_data.FieldMetaData = org.apache.thrift.meta_data.FieldMetaData(
      "topic",
      org.apache.thrift.TFieldRequirementType.OPTIONAL,
      org.apache.thrift.meta_data.FieldValueMetaData(org.apache.thrift.protocol.TType.STRING),
      emptyMap())
    private val LABEL_FIELD_DESC: org.apache.thrift.protocol.TField = org.apache.thrift.protocol.TField("label", org.apache.thrift.protocol.TType.STRING, 5)
    private val LABEL_FIELD_META_DATA: org.apache.thrift.meta_data.FieldMetaData = org.apache.thrift.meta_data.FieldMetaData(
      "label",
      org.apache.thrift.TFieldRequirementType.OPTIONAL,
      org.apache.thrift.meta_data.FieldValueMetaData(org.apache.thrift.protocol.TType.STRING),
      emptyMap())
    private val GTYPE_FIELD_DESC: org.apache.thrift.protocol.TField = org.apache.thrift.protocol.TField("gtype", org.apache.thrift.protocol.TType.BYTE, 6)
    private val GTYPE_FIELD_META_DATA: org.apache.thrift.meta_data.FieldMetaData = org.apache.thrift.meta_data.FieldMetaData(
      "gtype",
      org.apache.thrift.TFieldRequirementType.OPTIONAL,
      org.apache.thrift.meta_data.FieldValueMetaData(org.apache.thrift.protocol.TType.BYTE),
      emptyMap())
    private val CREATETIME_FIELD_DESC: org.apache.thrift.protocol.TField = org.apache.thrift.protocol.TField("createtime", org.apache.thrift.protocol.TType.I64, 7)
    private val CREATETIME_FIELD_META_DATA: org.apache.thrift.meta_data.FieldMetaData = org.apache.thrift.meta_data.FieldMetaData(
      "createtime",
      org.apache.thrift.TFieldRequirementType.OPTIONAL,
      org.apache.thrift.meta_data.FieldValueMetaData(org.apache.thrift.protocol.TType.I64),
      emptyMap())
    private val EXTEND_FIELD_DESC: org.apache.thrift.protocol.TField = org.apache.thrift.protocol.TField("extend", org.apache.thrift.protocol.TType.MAP, 8)
    private val EXTEND_FIELD_META_DATA: org.apache.thrift.meta_data.FieldMetaData = org.apache.thrift.meta_data.FieldMetaData(
      "extend",
      org.apache.thrift.TFieldRequirementType.OPTIONAL,
      org.apache.thrift.meta_data.MapMetaData(org.apache.thrift.protocol.TType.MAP,
        org.apache.thrift.meta_data.FieldValueMetaData(org.apache.thrift.protocol.TType.STRING),
        org.apache.thrift.meta_data.FieldValueMetaData(org.apache.thrift.protocol.TType.STRING)),
      emptyMap())
    private val EXTRA_FIELD_DESC: org.apache.thrift.protocol.TField = org.apache.thrift.protocol.TField("extra", org.apache.thrift.protocol.TType.MAP, 9)
    private val EXTRA_FIELD_META_DATA: org.apache.thrift.meta_data.FieldMetaData = org.apache.thrift.meta_data.FieldMetaData(
      "extra",
      org.apache.thrift.TFieldRequirementType.OPTIONAL,
      org.apache.thrift.meta_data.MapMetaData(org.apache.thrift.protocol.TType.MAP,
        org.apache.thrift.meta_data.FieldValueMetaData(org.apache.thrift.protocol.TType.STRING),
        org.apache.thrift.meta_data.FieldValueMetaData(org.apache.thrift.protocol.TType.STRING, true)),
      emptyMap())
    private val metadata: Map<_Fields, org.apache.thrift.meta_data.FieldMetaData> = mapOf(
      _Fields.FOUNDER to FOUNDER_FIELD_META_DATA,
      _Fields.MANAGERS to MANAGERS_FIELD_META_DATA,
      _Fields.COVER to COVER_FIELD_META_DATA,
      _Fields.TOPIC to TOPIC_FIELD_META_DATA,
      _Fields.LABEL to LABEL_FIELD_META_DATA,
      _Fields.GTYPE to GTYPE_FIELD_META_DATA,
      _Fields.CREATETIME to CREATETIME_FIELD_META_DATA,
      _Fields.EXTEND to EXTEND_FIELD_META_DATA,
      _Fields.EXTRA to EXTRA_FIELD_META_DATA,
    )
    init {
      org.apache.thrift.meta_data.FieldMetaData.addStructMetaDataMap(TimRoomBean::class.java, metadata)
    }
  }

  private object TimRoomBeanStandardScheme : org.apache.thrift.scheme.StandardScheme<TimRoomBean>() {
    override fun read(iproto: org.apache.thrift.protocol.TProtocol, struct: TimRoomBean) {
      iproto.apply {
        readStruct {
          var stopped = false
          while (!stopped) {
            stopped = readField {
              val skipNext = { org.apache.thrift.protocol.TProtocolUtil.skip(iproto, it.type) }
              when (it.id.toInt()) {
                1 -> {
                  if (it.type == org.apache.thrift.protocol.TType.STRING) {
                    struct.founder = readString()
                  } else {
                    skipNext()
                  }
                }
                2 -> {
                  if (it.type == org.apache.thrift.protocol.TType.LIST) {
                    struct.managers = readList { tlist ->
                      kotlin.collections.List(tlist.size) {
                        readString()
                      }
                    }
                  } else {
                    skipNext()
                  }
                }
                3 -> {
                  if (it.type == org.apache.thrift.protocol.TType.STRING) {
                    struct.cover = readString()
                  } else {
                    skipNext()
                  }
                }
                4 -> {
                  if (it.type == org.apache.thrift.protocol.TType.STRING) {
                    struct.topic = readString()
                  } else {
                    skipNext()
                  }
                }
                5 -> {
                  if (it.type == org.apache.thrift.protocol.TType.STRING) {
                    struct.label = readString()
                  } else {
                    skipNext()
                  }
                }
                6 -> {
                  if (it.type == org.apache.thrift.protocol.TType.BYTE) {
                    struct.gtype = readByte()
                  } else {
                    skipNext()
                  }
                }
                7 -> {
                  if (it.type == org.apache.thrift.protocol.TType.I64) {
                    struct.createtime = readI64()
                  } else {
                    skipNext()
                  }
                }
                8 -> {
                  if (it.type == org.apache.thrift.protocol.TType.MAP) {
                    struct.extend = readMap { tmap ->
                      kotlin.collections.List(tmap.size) {
                        readString() to readString()
                      }.associate { it }
                    }
                  } else {
                    skipNext()
                  }
                }
                9 -> {
                  if (it.type == org.apache.thrift.protocol.TType.MAP) {
                    struct.extra = readMap { tmap ->
                      kotlin.collections.List(tmap.size) {
                        readString() to org.apache.thrift.TBaseHelper.byteBufferToByteArray(readBinary())
                      }.associate { it }
                    }
                  } else {
                    skipNext()
                  }
                }
                else -> skipNext()
              }
            }
          }
          struct.validate()
        }
      }
    }

    override fun write(oproto: org.apache.thrift.protocol.TProtocol, struct: TimRoomBean) {
      struct.validate()
      oproto.apply {
        writeStruct(STRUCT_DESC) {
          struct.founder?.let { founder ->
            writeField(FOUNDER_FIELD_DESC) {
              writeString(founder)
            }
          }
          struct.managers?.let { managers ->
            writeField(MANAGERS_FIELD_DESC) {
              writeList(org.apache.thrift.protocol.TType.STRING, managers) {
                writeString(it)
              }
            }
          }
          struct.cover?.let { cover ->
            writeField(COVER_FIELD_DESC) {
              writeString(cover)
            }
          }
          struct.topic?.let { topic ->
            writeField(TOPIC_FIELD_DESC) {
              writeString(topic)
            }
          }
          struct.label?.let { label ->
            writeField(LABEL_FIELD_DESC) {
              writeString(label)
            }
          }
          struct.gtype?.let { gtype ->
            writeField(GTYPE_FIELD_DESC) {
              writeByte(gtype)
            }
          }
          struct.createtime?.let { createtime ->
            writeField(CREATETIME_FIELD_DESC) {
              writeI64(createtime)
            }
          }
          struct.extend?.let { extend ->
            writeField(EXTEND_FIELD_DESC) {
              writeMap(org.apache.thrift.protocol.TType.STRING, org.apache.thrift.protocol.TType.STRING, extend) { (key, value) ->
                writeString(key)
                writeString(value)
              }
            }
          }
          struct.extra?.let { extra ->
            writeField(EXTRA_FIELD_DESC) {
              writeMap(org.apache.thrift.protocol.TType.STRING, org.apache.thrift.protocol.TType.STRING, extra) { (key, value) ->
                writeString(key)
                writeBinary(java.nio.ByteBuffer.wrap(value))
              }
            }
          }
          writeFieldStop()
        }
      }
    }

  }

  override fun compareTo(other: TimRoomBean?): kotlin.Int {
    val comparator = compareBy<TimRoomBean> { it::class.java.name }
      .thenBy { it.founder } 
      .thenBy(org.apache.thrift.TBaseHelper::compareTo) { it.managers } 
      .thenBy { it.cover } 
      .thenBy { it.topic } 
      .thenBy { it.label } 
      .thenBy { it.gtype } 
      .thenBy { it.createtime } 
      .thenBy(org.apache.thrift.TBaseHelper::compareTo) { it.extend } 
      .thenBy(org.apache.thrift.TBaseHelper::compareTo) { it.extra } 
    return nullsFirst(comparator).compare(this, other)
  }

  override fun fieldForId(fieldId: kotlin.Int): _Fields {
    return _Fields.findByValue(fieldId) ?: throw kotlin.IllegalArgumentException("invalid fieldId $fieldId")
  }

  override fun getFieldValue(field: _Fields): kotlin.Any? {
    return when (field) {
      _Fields.FOUNDER -> this.founder
      _Fields.MANAGERS -> this.managers
      _Fields.COVER -> this.cover
      _Fields.TOPIC -> this.topic
      _Fields.LABEL -> this.label
      _Fields.GTYPE -> this.gtype
      _Fields.CREATETIME -> this.createtime
      _Fields.EXTEND -> this.extend
      _Fields.EXTRA -> this.extra
    }
  }

  @Suppress("UNCHECKED_CAST")
  override fun setFieldValue(field: _Fields, value: kotlin.Any?): kotlin.Unit {
    when (field) {
      _Fields.FOUNDER -> this.founder = value as kotlin.String?
      _Fields.MANAGERS -> this.managers = value as kotlin.collections.List<kotlin.String>?
      _Fields.COVER -> this.cover = value as kotlin.String?
      _Fields.TOPIC -> this.topic = value as kotlin.String?
      _Fields.LABEL -> this.label = value as kotlin.String?
      _Fields.GTYPE -> this.gtype = value as kotlin.Byte?
      _Fields.CREATETIME -> this.createtime = value as kotlin.Long?
      _Fields.EXTEND -> this.extend = value as kotlin.collections.Map<kotlin.String, kotlin.String>?
      _Fields.EXTRA -> this.extra = value as kotlin.collections.Map<kotlin.String, kotlin.ByteArray>?
    }
  }

  override fun isSet(field: _Fields): kotlin.Boolean {
    return when (field) {
      _Fields.FOUNDER -> this.founder != null
      _Fields.MANAGERS -> this.managers != null
      _Fields.COVER -> this.cover != null
      _Fields.TOPIC -> this.topic != null
      _Fields.LABEL -> this.label != null
      _Fields.GTYPE -> this.gtype != null
      _Fields.CREATETIME -> this.createtime != null
      _Fields.EXTEND -> this.extend != null
      _Fields.EXTRA -> this.extra != null
    }
  }

  override fun deepCopy(): TimRoomBean {
    return TimRoomBean (
      founder,
      managers,
      cover,
      topic,
      label,
      gtype,
      createtime,
      extend,
      extra,
    )
  }

  override fun clear(): kotlin.Unit {
    founder = null
    managers = null
    cover = null
    topic = null
    label = null
    gtype = null
    createtime = null
    extend = null
    extra = null
  }

  @kotlin.jvm.Throws(org.apache.thrift.TException::class)
  fun validate(): kotlin.Unit {
  }

  override fun read(iproto: org.apache.thrift.protocol.TProtocol): kotlin.Unit {
    require(org.apache.thrift.scheme.StandardScheme::class.java == iproto.scheme) { "only standard scheme is supported for now" }
    TimRoomBeanStandardScheme.read(iproto, this)
  }

  override fun write(oproto: org.apache.thrift.protocol.TProtocol): kotlin.Unit {
    require(org.apache.thrift.scheme.StandardScheme::class.java == oproto.scheme) { "only standard scheme is supported for now" }
    TimRoomBeanStandardScheme.write(oproto, this)
  }

}