/**
 * Autogenerated by Thrift Compiler (0.18.1)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
@file:Suppress("ClassName", "PropertyName", "RedundantUnitReturnType", "NestedLambdaShadowedImplicitParameter", "RemoveRedundantQualifierName")
package io.github.donnie4w.tim.stub

data class TimMessageList(
  var id: kotlin.Long? = null,
  var messageList: kotlin.collections.List<TimMessage>? = null
) : org.apache.thrift.TBase<TimMessageList, TimMessageList._Fields> {
  enum class _Fields(private val thriftFieldId: kotlin.Short, private val fieldName: kotlin.String) : org.apache.thrift.TFieldIdEnum {
    ID(1, "id"),
    MESSAGE_LIST(2, "messageList");

    override fun getThriftFieldId() = thriftFieldId

    override fun getFieldName() = fieldName

    companion object {
      @kotlin.jvm.JvmStatic
      fun findByValue(value: kotlin.Int): _Fields? {
        return when (value) {
          1 -> ID
          2 -> MESSAGE_LIST
          else -> null
        }
      }

      @kotlin.jvm.JvmStatic
      fun findByName(name: kotlin.String): _Fields? {
        return when (name) {
          "id" -> ID
          "messageList" -> MESSAGE_LIST
          else -> null
        }
      }
    }
  }

  companion object {
    private val STRUCT_DESC: org.apache.thrift.protocol.TStruct = org.apache.thrift.protocol.TStruct("TimMessageList")
    private val ID_FIELD_DESC: org.apache.thrift.protocol.TField = org.apache.thrift.protocol.TField("id", org.apache.thrift.protocol.TType.I64, 1)
    private val ID_FIELD_META_DATA: org.apache.thrift.meta_data.FieldMetaData = org.apache.thrift.meta_data.FieldMetaData(
      "id",
      org.apache.thrift.TFieldRequirementType.OPTIONAL,
      org.apache.thrift.meta_data.FieldValueMetaData(org.apache.thrift.protocol.TType.I64),
      emptyMap())
    private val MESSAGE_LIST_FIELD_DESC: org.apache.thrift.protocol.TField = org.apache.thrift.protocol.TField("messageList", org.apache.thrift.protocol.TType.LIST, 2)
    private val MESSAGE_LIST_FIELD_META_DATA: org.apache.thrift.meta_data.FieldMetaData = org.apache.thrift.meta_data.FieldMetaData(
      "messageList",
      org.apache.thrift.TFieldRequirementType.OPTIONAL,
      org.apache.thrift.meta_data.ListMetaData(org.apache.thrift.protocol.TType.LIST,
        org.apache.thrift.meta_data.StructMetaData(org.apache.thrift.protocol.TType.STRUCT, TimMessage::class.java)),
      emptyMap())
    private val metadata: Map<_Fields, org.apache.thrift.meta_data.FieldMetaData> = mapOf(
      _Fields.ID to ID_FIELD_META_DATA,
      _Fields.MESSAGE_LIST to MESSAGE_LIST_FIELD_META_DATA,
    )
    init {
      org.apache.thrift.meta_data.FieldMetaData.addStructMetaDataMap(TimMessageList::class.java, metadata)
    }
  }

  private object TimMessageListStandardScheme : org.apache.thrift.scheme.StandardScheme<TimMessageList>() {
    override fun read(iproto: org.apache.thrift.protocol.TProtocol, struct: TimMessageList) {
      iproto.apply {
        readStruct {
          var stopped = false
          while (!stopped) {
            stopped = readField {
              val skipNext = { org.apache.thrift.protocol.TProtocolUtil.skip(iproto, it.type) }
              when (it.id.toInt()) {
                1 -> {
                  if (it.type == org.apache.thrift.protocol.TType.I64) {
                    struct.id = readI64()
                  } else {
                    skipNext()
                  }
                }
                2 -> {
                  if (it.type == org.apache.thrift.protocol.TType.LIST) {
                    struct.messageList = readList { tlist ->
                      kotlin.collections.List(tlist.size) {
                        TimMessage().apply { read(iproto) }
                      }
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

    override fun write(oproto: org.apache.thrift.protocol.TProtocol, struct: TimMessageList) {
      struct.validate()
      oproto.apply {
        writeStruct(STRUCT_DESC) {
          struct.id?.let { id ->
            writeField(ID_FIELD_DESC) {
              writeI64(id)
            }
          }
          struct.messageList?.let { messageList ->
            writeField(MESSAGE_LIST_FIELD_DESC) {
              writeList(org.apache.thrift.protocol.TType.STRUCT, messageList) {
                it.write(this)
              }
            }
          }
          writeFieldStop()
        }
      }
    }

  }

  override fun compareTo(other: TimMessageList?): kotlin.Int {
    val comparator = compareBy<TimMessageList> { it::class.java.name }
      .thenBy { it.id } 
      .thenBy(org.apache.thrift.TBaseHelper::compareTo) { it.messageList } 
    return nullsFirst(comparator).compare(this, other)
  }

  override fun fieldForId(fieldId: kotlin.Int): _Fields {
    return _Fields.findByValue(fieldId) ?: throw kotlin.IllegalArgumentException("invalid fieldId $fieldId")
  }

  override fun getFieldValue(field: _Fields): kotlin.Any? {
    return when (field) {
      _Fields.ID -> this.id
      _Fields.MESSAGE_LIST -> this.messageList
    }
  }

  @Suppress("UNCHECKED_CAST")
  override fun setFieldValue(field: _Fields, value: kotlin.Any?): kotlin.Unit {
    when (field) {
      _Fields.ID -> this.id = value as kotlin.Long?
      _Fields.MESSAGE_LIST -> this.messageList = value as kotlin.collections.List<TimMessage>?
    }
  }

  override fun isSet(field: _Fields): kotlin.Boolean {
    return when (field) {
      _Fields.ID -> this.id != null
      _Fields.MESSAGE_LIST -> this.messageList != null
    }
  }

  override fun deepCopy(): TimMessageList {
    return TimMessageList (
      id,
      messageList,
    )
  }

  override fun clear(): kotlin.Unit {
    id = null
    messageList = null
  }

  @kotlin.jvm.Throws(org.apache.thrift.TException::class)
  fun validate(): kotlin.Unit {
  }

  override fun read(iproto: org.apache.thrift.protocol.TProtocol): kotlin.Unit {
    require(org.apache.thrift.scheme.StandardScheme::class.java == iproto.scheme) { "only standard scheme is supported for now" }
    TimMessageListStandardScheme.read(iproto, this)
  }

  override fun write(oproto: org.apache.thrift.protocol.TProtocol): kotlin.Unit {
    require(org.apache.thrift.scheme.StandardScheme::class.java == oproto.scheme) { "only standard scheme is supported for now" }
    TimMessageListStandardScheme.write(oproto, this)
  }

}
