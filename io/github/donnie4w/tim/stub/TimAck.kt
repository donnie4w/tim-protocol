/**
 * Autogenerated by Thrift Compiler (0.18.1)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
@file:Suppress("ClassName", "PropertyName", "RedundantUnitReturnType", "NestedLambdaShadowedImplicitParameter", "RemoveRedundantQualifierName")
package io.github.donnie4w.tim.stub

data class TimAck(
  private var _ok: kotlin.Boolean? = null,
  private var _timType: kotlin.Byte? = null,
  var error: TimError? = null,
  var t: kotlin.Long? = null,
  var n: kotlin.String? = null,
  var t2: kotlin.Long? = null,
  var n2: kotlin.String? = null
) : org.apache.thrift.TBase<TimAck, TimAck._Fields> {
  val ok: kotlin.Boolean get() = _ok!!
  val timType: kotlin.Byte get() = _timType!!
  enum class _Fields(private val thriftFieldId: kotlin.Short, private val fieldName: kotlin.String) : org.apache.thrift.TFieldIdEnum {
    OK(1, "ok"),
    TIM_TYPE(2, "timType"),
    ERROR(3, "error"),
    T(4, "t"),
    N(5, "n"),
    T2(6, "t2"),
    N2(7, "n2");

    override fun getThriftFieldId() = thriftFieldId

    override fun getFieldName() = fieldName

    companion object {
      @kotlin.jvm.JvmStatic
      fun findByValue(value: kotlin.Int): _Fields? {
        return when (value) {
          1 -> OK
          2 -> TIM_TYPE
          3 -> ERROR
          4 -> T
          5 -> N
          6 -> T2
          7 -> N2
          else -> null
        }
      }

      @kotlin.jvm.JvmStatic
      fun findByName(name: kotlin.String): _Fields? {
        return when (name) {
          "ok" -> OK
          "timType" -> TIM_TYPE
          "error" -> ERROR
          "t" -> T
          "n" -> N
          "t2" -> T2
          "n2" -> N2
          else -> null
        }
      }
    }
  }

  companion object {
    private val STRUCT_DESC: org.apache.thrift.protocol.TStruct = org.apache.thrift.protocol.TStruct("TimAck")
    private val OK_FIELD_DESC: org.apache.thrift.protocol.TField = org.apache.thrift.protocol.TField("ok", org.apache.thrift.protocol.TType.BOOL, 1)
    private val OK_FIELD_META_DATA: org.apache.thrift.meta_data.FieldMetaData = org.apache.thrift.meta_data.FieldMetaData(
      "ok",
      org.apache.thrift.TFieldRequirementType.REQUIRED,
      org.apache.thrift.meta_data.FieldValueMetaData(org.apache.thrift.protocol.TType.BOOL),
      emptyMap())
    private val TIM_TYPE_FIELD_DESC: org.apache.thrift.protocol.TField = org.apache.thrift.protocol.TField("timType", org.apache.thrift.protocol.TType.BYTE, 2)
    private val TIM_TYPE_FIELD_META_DATA: org.apache.thrift.meta_data.FieldMetaData = org.apache.thrift.meta_data.FieldMetaData(
      "timType",
      org.apache.thrift.TFieldRequirementType.REQUIRED,
      org.apache.thrift.meta_data.FieldValueMetaData(org.apache.thrift.protocol.TType.BYTE),
      emptyMap())
    private val ERROR_FIELD_DESC: org.apache.thrift.protocol.TField = org.apache.thrift.protocol.TField("error", org.apache.thrift.protocol.TType.STRUCT, 3)
    private val ERROR_FIELD_META_DATA: org.apache.thrift.meta_data.FieldMetaData = org.apache.thrift.meta_data.FieldMetaData(
      "error",
      org.apache.thrift.TFieldRequirementType.OPTIONAL,
      org.apache.thrift.meta_data.StructMetaData(org.apache.thrift.protocol.TType.STRUCT, TimError::class.java),
      emptyMap())
    private val T_FIELD_DESC: org.apache.thrift.protocol.TField = org.apache.thrift.protocol.TField("t", org.apache.thrift.protocol.TType.I64, 4)
    private val T_FIELD_META_DATA: org.apache.thrift.meta_data.FieldMetaData = org.apache.thrift.meta_data.FieldMetaData(
      "t",
      org.apache.thrift.TFieldRequirementType.OPTIONAL,
      org.apache.thrift.meta_data.FieldValueMetaData(org.apache.thrift.protocol.TType.I64),
      emptyMap())
    private val N_FIELD_DESC: org.apache.thrift.protocol.TField = org.apache.thrift.protocol.TField("n", org.apache.thrift.protocol.TType.STRING, 5)
    private val N_FIELD_META_DATA: org.apache.thrift.meta_data.FieldMetaData = org.apache.thrift.meta_data.FieldMetaData(
      "n",
      org.apache.thrift.TFieldRequirementType.OPTIONAL,
      org.apache.thrift.meta_data.FieldValueMetaData(org.apache.thrift.protocol.TType.STRING),
      emptyMap())
    private val T2_FIELD_DESC: org.apache.thrift.protocol.TField = org.apache.thrift.protocol.TField("t2", org.apache.thrift.protocol.TType.I64, 6)
    private val T2_FIELD_META_DATA: org.apache.thrift.meta_data.FieldMetaData = org.apache.thrift.meta_data.FieldMetaData(
      "t2",
      org.apache.thrift.TFieldRequirementType.OPTIONAL,
      org.apache.thrift.meta_data.FieldValueMetaData(org.apache.thrift.protocol.TType.I64),
      emptyMap())
    private val N2_FIELD_DESC: org.apache.thrift.protocol.TField = org.apache.thrift.protocol.TField("n2", org.apache.thrift.protocol.TType.STRING, 7)
    private val N2_FIELD_META_DATA: org.apache.thrift.meta_data.FieldMetaData = org.apache.thrift.meta_data.FieldMetaData(
      "n2",
      org.apache.thrift.TFieldRequirementType.OPTIONAL,
      org.apache.thrift.meta_data.FieldValueMetaData(org.apache.thrift.protocol.TType.STRING),
      emptyMap())
    private val metadata: Map<_Fields, org.apache.thrift.meta_data.FieldMetaData> = mapOf(
      _Fields.OK to OK_FIELD_META_DATA,
      _Fields.TIM_TYPE to TIM_TYPE_FIELD_META_DATA,
      _Fields.ERROR to ERROR_FIELD_META_DATA,
      _Fields.T to T_FIELD_META_DATA,
      _Fields.N to N_FIELD_META_DATA,
      _Fields.T2 to T2_FIELD_META_DATA,
      _Fields.N2 to N2_FIELD_META_DATA,
    )
    init {
      org.apache.thrift.meta_data.FieldMetaData.addStructMetaDataMap(TimAck::class.java, metadata)
    }
  }

  private object TimAckStandardScheme : org.apache.thrift.scheme.StandardScheme<TimAck>() {
    override fun read(iproto: org.apache.thrift.protocol.TProtocol, struct: TimAck) {
      iproto.apply {
        readStruct {
          var stopped = false
          while (!stopped) {
            stopped = readField {
              val skipNext = { org.apache.thrift.protocol.TProtocolUtil.skip(iproto, it.type) }
              when (it.id.toInt()) {
                1 -> {
                  if (it.type == org.apache.thrift.protocol.TType.BOOL) {
                    struct._ok = readBool()
                  } else {
                    skipNext()
                  }
                }
                2 -> {
                  if (it.type == org.apache.thrift.protocol.TType.BYTE) {
                    struct._timType = readByte()
                  } else {
                    skipNext()
                  }
                }
                3 -> {
                  if (it.type == org.apache.thrift.protocol.TType.STRUCT) {
                    struct.error = TimError().apply { read(iproto) }
                  } else {
                    skipNext()
                  }
                }
                4 -> {
                  if (it.type == org.apache.thrift.protocol.TType.I64) {
                    struct.t = readI64()
                  } else {
                    skipNext()
                  }
                }
                5 -> {
                  if (it.type == org.apache.thrift.protocol.TType.STRING) {
                    struct.n = readString()
                  } else {
                    skipNext()
                  }
                }
                6 -> {
                  if (it.type == org.apache.thrift.protocol.TType.I64) {
                    struct.t2 = readI64()
                  } else {
                    skipNext()
                  }
                }
                7 -> {
                  if (it.type == org.apache.thrift.protocol.TType.STRING) {
                    struct.n2 = readString()
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

    override fun write(oproto: org.apache.thrift.protocol.TProtocol, struct: TimAck) {
      struct.validate()
      oproto.apply {
        writeStruct(STRUCT_DESC) {
          struct.ok.let { ok ->
            writeField(OK_FIELD_DESC) {
              writeBool(ok)
            }
          }
          struct.timType.let { timType ->
            writeField(TIM_TYPE_FIELD_DESC) {
              writeByte(timType)
            }
          }
          struct.error?.let { error ->
            writeField(ERROR_FIELD_DESC) {
              error.write(this)
            }
          }
          struct.t?.let { t ->
            writeField(T_FIELD_DESC) {
              writeI64(t)
            }
          }
          struct.n?.let { n ->
            writeField(N_FIELD_DESC) {
              writeString(n)
            }
          }
          struct.t2?.let { t2 ->
            writeField(T2_FIELD_DESC) {
              writeI64(t2)
            }
          }
          struct.n2?.let { n2 ->
            writeField(N2_FIELD_DESC) {
              writeString(n2)
            }
          }
          writeFieldStop()
        }
      }
    }

  }

  override fun compareTo(other: TimAck?): kotlin.Int {
    val comparator = compareBy<TimAck> { it::class.java.name }
      .thenBy { it.ok } 
      .thenBy { it.timType } 
      .thenBy { it.error } 
      .thenBy { it.t } 
      .thenBy { it.n } 
      .thenBy { it.t2 } 
      .thenBy { it.n2 } 
    return nullsFirst(comparator).compare(this, other)
  }

  override fun fieldForId(fieldId: kotlin.Int): _Fields {
    return _Fields.findByValue(fieldId) ?: throw kotlin.IllegalArgumentException("invalid fieldId $fieldId")
  }

  override fun getFieldValue(field: _Fields): kotlin.Any? {
    return when (field) {
      _Fields.OK -> this.ok
      _Fields.TIM_TYPE -> this.timType
      _Fields.ERROR -> this.error
      _Fields.T -> this.t
      _Fields.N -> this.n
      _Fields.T2 -> this.t2
      _Fields.N2 -> this.n2
    }
  }

  @Suppress("UNCHECKED_CAST")
  override fun setFieldValue(field: _Fields, value: kotlin.Any?): kotlin.Unit {
    when (field) {
      _Fields.OK -> this._ok = value as kotlin.Boolean?
      _Fields.TIM_TYPE -> this._timType = value as kotlin.Byte?
      _Fields.ERROR -> this.error = value as TimError?
      _Fields.T -> this.t = value as kotlin.Long?
      _Fields.N -> this.n = value as kotlin.String?
      _Fields.T2 -> this.t2 = value as kotlin.Long?
      _Fields.N2 -> this.n2 = value as kotlin.String?
    }
  }

  override fun isSet(field: _Fields): kotlin.Boolean {
    return when (field) {
      _Fields.OK -> this._ok != null
      _Fields.TIM_TYPE -> this._timType != null
      _Fields.ERROR -> this.error != null
      _Fields.T -> this.t != null
      _Fields.N -> this.n != null
      _Fields.T2 -> this.t2 != null
      _Fields.N2 -> this.n2 != null
    }
  }

  override fun deepCopy(): TimAck {
    return TimAck (
      ok,
      timType,
      error,
      t,
      n,
      t2,
      n2,
    )
  }

  override fun clear(): kotlin.Unit {
    _ok = null
    _timType = null
    error = null
    t = null
    n = null
    t2 = null
    n2 = null
  }

  @kotlin.jvm.Throws(org.apache.thrift.TException::class)
  fun validate(): kotlin.Unit {
    if (_ok == null) {
      throw org.apache.thrift.TException("Required field `ok' is null, struct is: $this")
    }
    if (_timType == null) {
      throw org.apache.thrift.TException("Required field `timType' is null, struct is: $this")
    }
  }

  override fun read(iproto: org.apache.thrift.protocol.TProtocol): kotlin.Unit {
    require(org.apache.thrift.scheme.StandardScheme::class.java == iproto.scheme) { "only standard scheme is supported for now" }
    TimAckStandardScheme.read(iproto, this)
  }

  override fun write(oproto: org.apache.thrift.protocol.TProtocol): kotlin.Unit {
    require(org.apache.thrift.scheme.StandardScheme::class.java == oproto.scheme) { "only standard scheme is supported for now" }
    TimAckStandardScheme.write(oproto, this)
  }

}
