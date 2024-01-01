--
-- Autogenerated by Thrift
--
-- DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
-- @generated
--


require 'Thrift'
require 'stub_constants'

TimError = __TObject:new{
  code,
  info
}

function TimError:read(iprot)
  iprot:readStructBegin()
  while true do
    local fname, ftype, fid = iprot:readFieldBegin()
    if ftype == TType.STOP then
      break
    elseif fid == 1 then
      if ftype == TType.I32 then
        self.code = iprot:readI32()
      else
        iprot:skip(ftype)
      end
    elseif fid == 2 then
      if ftype == TType.STRING then
        self.info = iprot:readString()
      else
        iprot:skip(ftype)
      end
    else
      iprot:skip(ftype)
    end
    iprot:readFieldEnd()
  end
  iprot:readStructEnd()
end

function TimError:write(oprot)
  oprot:writeStructBegin('TimError')
  if self.code ~= nil then
    oprot:writeFieldBegin('code', TType.I32, 1)
    oprot:writeI32(self.code)
    oprot:writeFieldEnd()
  end
  if self.info ~= nil then
    oprot:writeFieldBegin('info', TType.STRING, 2)
    oprot:writeString(self.info)
    oprot:writeFieldEnd()
  end
  oprot:writeFieldStop()
  oprot:writeStructEnd()
end

TimAck = __TObject:new{
  ok,
  timType,
  error,
  t,
  n,
  t2,
  n2
}

function TimAck:read(iprot)
  iprot:readStructBegin()
  while true do
    local fname, ftype, fid = iprot:readFieldBegin()
    if ftype == TType.STOP then
      break
    elseif fid == 1 then
      if ftype == TType.BOOL then
        self.ok = iprot:readBool()
      else
        iprot:skip(ftype)
      end
    elseif fid == 2 then
      if ftype == TType.BYTE then
        self.timType = iprot:readByte()
      else
        iprot:skip(ftype)
      end
    elseif fid == 3 then
      if ftype == TType.STRUCT then
        self.error = TimError:new{}
        self.error:read(iprot)
      else
        iprot:skip(ftype)
      end
    elseif fid == 4 then
      if ftype == TType.I64 then
        self.t = iprot:readI64()
      else
        iprot:skip(ftype)
      end
    elseif fid == 5 then
      if ftype == TType.STRING then
        self.n = iprot:readString()
      else
        iprot:skip(ftype)
      end
    elseif fid == 6 then
      if ftype == TType.I64 then
        self.t2 = iprot:readI64()
      else
        iprot:skip(ftype)
      end
    elseif fid == 7 then
      if ftype == TType.STRING then
        self.n2 = iprot:readString()
      else
        iprot:skip(ftype)
      end
    else
      iprot:skip(ftype)
    end
    iprot:readFieldEnd()
  end
  iprot:readStructEnd()
end

function TimAck:write(oprot)
  oprot:writeStructBegin('TimAck')
  if self.ok ~= nil then
    oprot:writeFieldBegin('ok', TType.BOOL, 1)
    oprot:writeBool(self.ok)
    oprot:writeFieldEnd()
  end
  if self.timType ~= nil then
    oprot:writeFieldBegin('timType', TType.BYTE, 2)
    oprot:writeByte(self.timType)
    oprot:writeFieldEnd()
  end
  if self.error ~= nil then
    oprot:writeFieldBegin('error', TType.STRUCT, 3)
    self.error:write(oprot)
    oprot:writeFieldEnd()
  end
  if self.t ~= nil then
    oprot:writeFieldBegin('t', TType.I64, 4)
    oprot:writeI64(self.t)
    oprot:writeFieldEnd()
  end
  if self.n ~= nil then
    oprot:writeFieldBegin('n', TType.STRING, 5)
    oprot:writeString(self.n)
    oprot:writeFieldEnd()
  end
  if self.t2 ~= nil then
    oprot:writeFieldBegin('t2', TType.I64, 6)
    oprot:writeI64(self.t2)
    oprot:writeFieldEnd()
  end
  if self.n2 ~= nil then
    oprot:writeFieldBegin('n2', TType.STRING, 7)
    oprot:writeString(self.n2)
    oprot:writeFieldEnd()
  end
  oprot:writeFieldStop()
  oprot:writeStructEnd()
end

TimReq = __TObject:new{
  rtype,
  node,
  node2,
  reqInt,
  reqInt2,
  reqStr,
  reqStr2
}

function TimReq:read(iprot)
  iprot:readStructBegin()
  while true do
    local fname, ftype, fid = iprot:readFieldBegin()
    if ftype == TType.STOP then
      break
    elseif fid == 1 then
      if ftype == TType.I32 then
        self.rtype = iprot:readI32()
      else
        iprot:skip(ftype)
      end
    elseif fid == 2 then
      if ftype == TType.STRING then
        self.node = iprot:readString()
      else
        iprot:skip(ftype)
      end
    elseif fid == 3 then
      if ftype == TType.STRING then
        self.node2 = iprot:readString()
      else
        iprot:skip(ftype)
      end
    elseif fid == 4 then
      if ftype == TType.I64 then
        self.reqInt = iprot:readI64()
      else
        iprot:skip(ftype)
      end
    elseif fid == 5 then
      if ftype == TType.I64 then
        self.reqInt2 = iprot:readI64()
      else
        iprot:skip(ftype)
      end
    elseif fid == 6 then
      if ftype == TType.STRING then
        self.reqStr = iprot:readString()
      else
        iprot:skip(ftype)
      end
    elseif fid == 7 then
      if ftype == TType.STRING then
        self.reqStr2 = iprot:readString()
      else
        iprot:skip(ftype)
      end
    else
      iprot:skip(ftype)
    end
    iprot:readFieldEnd()
  end
  iprot:readStructEnd()
end

function TimReq:write(oprot)
  oprot:writeStructBegin('TimReq')
  if self.rtype ~= nil then
    oprot:writeFieldBegin('rtype', TType.I32, 1)
    oprot:writeI32(self.rtype)
    oprot:writeFieldEnd()
  end
  if self.node ~= nil then
    oprot:writeFieldBegin('node', TType.STRING, 2)
    oprot:writeString(self.node)
    oprot:writeFieldEnd()
  end
  if self.node2 ~= nil then
    oprot:writeFieldBegin('node2', TType.STRING, 3)
    oprot:writeString(self.node2)
    oprot:writeFieldEnd()
  end
  if self.reqInt ~= nil then
    oprot:writeFieldBegin('reqInt', TType.I64, 4)
    oprot:writeI64(self.reqInt)
    oprot:writeFieldEnd()
  end
  if self.reqInt2 ~= nil then
    oprot:writeFieldBegin('reqInt2', TType.I64, 5)
    oprot:writeI64(self.reqInt2)
    oprot:writeFieldEnd()
  end
  if self.reqStr ~= nil then
    oprot:writeFieldBegin('reqStr', TType.STRING, 6)
    oprot:writeString(self.reqStr)
    oprot:writeFieldEnd()
  end
  if self.reqStr2 ~= nil then
    oprot:writeFieldBegin('reqStr2', TType.STRING, 7)
    oprot:writeString(self.reqStr2)
    oprot:writeFieldEnd()
  end
  oprot:writeFieldStop()
  oprot:writeStructEnd()
end

Tid = __TObject:new{
  node,
  domain,
  resource,
  termtyp,
  extend
}

function Tid:read(iprot)
  iprot:readStructBegin()
  while true do
    local fname, ftype, fid = iprot:readFieldBegin()
    if ftype == TType.STOP then
      break
    elseif fid == 1 then
      if ftype == TType.STRING then
        self.node = iprot:readString()
      else
        iprot:skip(ftype)
      end
    elseif fid == 2 then
      if ftype == TType.STRING then
        self.domain = iprot:readString()
      else
        iprot:skip(ftype)
      end
    elseif fid == 3 then
      if ftype == TType.STRING then
        self.resource = iprot:readString()
      else
        iprot:skip(ftype)
      end
    elseif fid == 4 then
      if ftype == TType.BYTE then
        self.termtyp = iprot:readByte()
      else
        iprot:skip(ftype)
      end
    elseif fid == 5 then
      if ftype == TType.MAP then
        self.extend = {}
        local _ktype1, _vtype2, _size0 = iprot:readMapBegin() 
        for _i=1,_size0 do
          local _key4 = iprot:readString()
          local _val5 = iprot:readString()
          self.extend[_key4] = _val5
        end
        iprot:readMapEnd()
      else
        iprot:skip(ftype)
      end
    else
      iprot:skip(ftype)
    end
    iprot:readFieldEnd()
  end
  iprot:readStructEnd()
end

function Tid:write(oprot)
  oprot:writeStructBegin('Tid')
  if self.node ~= nil then
    oprot:writeFieldBegin('node', TType.STRING, 1)
    oprot:writeString(self.node)
    oprot:writeFieldEnd()
  end
  if self.domain ~= nil then
    oprot:writeFieldBegin('domain', TType.STRING, 2)
    oprot:writeString(self.domain)
    oprot:writeFieldEnd()
  end
  if self.resource ~= nil then
    oprot:writeFieldBegin('resource', TType.STRING, 3)
    oprot:writeString(self.resource)
    oprot:writeFieldEnd()
  end
  if self.termtyp ~= nil then
    oprot:writeFieldBegin('termtyp', TType.BYTE, 4)
    oprot:writeByte(self.termtyp)
    oprot:writeFieldEnd()
  end
  if self.extend ~= nil then
    oprot:writeFieldBegin('extend', TType.MAP, 5)
    oprot:writeMapBegin(TType.STRING, TType.STRING, ttable_size(self.extend))
    for kiter6,viter7 in pairs(self.extend) do
      oprot:writeString(kiter6)
      oprot:writeString(viter7)
    end
    oprot:writeMapEnd()
    oprot:writeFieldEnd()
  end
  oprot:writeFieldStop()
  oprot:writeStructEnd()
end

TimUserBean = __TObject:new{
  name,
  nickName,
  brithday,
  gender,
  cover,
  area,
  createtime,
  photoTidAlbum,
  extend,
  extra
}

function TimUserBean:read(iprot)
  iprot:readStructBegin()
  while true do
    local fname, ftype, fid = iprot:readFieldBegin()
    if ftype == TType.STOP then
      break
    elseif fid == 1 then
      if ftype == TType.STRING then
        self.name = iprot:readString()
      else
        iprot:skip(ftype)
      end
    elseif fid == 2 then
      if ftype == TType.STRING then
        self.nickName = iprot:readString()
      else
        iprot:skip(ftype)
      end
    elseif fid == 4 then
      if ftype == TType.STRING then
        self.brithday = iprot:readString()
      else
        iprot:skip(ftype)
      end
    elseif fid == 5 then
      if ftype == TType.BYTE then
        self.gender = iprot:readByte()
      else
        iprot:skip(ftype)
      end
    elseif fid == 6 then
      if ftype == TType.STRING then
        self.cover = iprot:readString()
      else
        iprot:skip(ftype)
      end
    elseif fid == 7 then
      if ftype == TType.STRING then
        self.area = iprot:readString()
      else
        iprot:skip(ftype)
      end
    elseif fid == 8 then
      if ftype == TType.I64 then
        self.createtime = iprot:readI64()
      else
        iprot:skip(ftype)
      end
    elseif fid == 9 then
      if ftype == TType.LIST then
        self.photoTidAlbum = {}
        local _etype11, _size8 = iprot:readListBegin()
        for _i=1,_size8 do
          local _elem12 = iprot:readString()
          table.insert(self.photoTidAlbum, _elem12)
        end
        iprot:readListEnd()
      else
        iprot:skip(ftype)
      end
    elseif fid == 10 then
      if ftype == TType.MAP then
        self.extend = {}
        local _ktype14, _vtype15, _size13 = iprot:readMapBegin() 
        for _i=1,_size13 do
          local _key17 = iprot:readString()
          local _val18 = iprot:readString()
          self.extend[_key17] = _val18
        end
        iprot:readMapEnd()
      else
        iprot:skip(ftype)
      end
    elseif fid == 11 then
      if ftype == TType.MAP then
        self.extra = {}
        local _ktype20, _vtype21, _size19 = iprot:readMapBegin() 
        for _i=1,_size19 do
          local _key23 = iprot:readString()
          local _val24 = iprot:readString()
          self.extra[_key23] = _val24
        end
        iprot:readMapEnd()
      else
        iprot:skip(ftype)
      end
    else
      iprot:skip(ftype)
    end
    iprot:readFieldEnd()
  end
  iprot:readStructEnd()
end

function TimUserBean:write(oprot)
  oprot:writeStructBegin('TimUserBean')
  if self.name ~= nil then
    oprot:writeFieldBegin('name', TType.STRING, 1)
    oprot:writeString(self.name)
    oprot:writeFieldEnd()
  end
  if self.nickName ~= nil then
    oprot:writeFieldBegin('nickName', TType.STRING, 2)
    oprot:writeString(self.nickName)
    oprot:writeFieldEnd()
  end
  if self.brithday ~= nil then
    oprot:writeFieldBegin('brithday', TType.STRING, 4)
    oprot:writeString(self.brithday)
    oprot:writeFieldEnd()
  end
  if self.gender ~= nil then
    oprot:writeFieldBegin('gender', TType.BYTE, 5)
    oprot:writeByte(self.gender)
    oprot:writeFieldEnd()
  end
  if self.cover ~= nil then
    oprot:writeFieldBegin('cover', TType.STRING, 6)
    oprot:writeString(self.cover)
    oprot:writeFieldEnd()
  end
  if self.area ~= nil then
    oprot:writeFieldBegin('area', TType.STRING, 7)
    oprot:writeString(self.area)
    oprot:writeFieldEnd()
  end
  if self.createtime ~= nil then
    oprot:writeFieldBegin('createtime', TType.I64, 8)
    oprot:writeI64(self.createtime)
    oprot:writeFieldEnd()
  end
  if self.photoTidAlbum ~= nil then
    oprot:writeFieldBegin('photoTidAlbum', TType.LIST, 9)
    oprot:writeListBegin(TType.STRING, #self.photoTidAlbum)
    for _,iter25 in ipairs(self.photoTidAlbum) do
      oprot:writeString(iter25)
    end
    oprot:writeListEnd()
    oprot:writeFieldEnd()
  end
  if self.extend ~= nil then
    oprot:writeFieldBegin('extend', TType.MAP, 10)
    oprot:writeMapBegin(TType.STRING, TType.STRING, ttable_size(self.extend))
    for kiter26,viter27 in pairs(self.extend) do
      oprot:writeString(kiter26)
      oprot:writeString(viter27)
    end
    oprot:writeMapEnd()
    oprot:writeFieldEnd()
  end
  if self.extra ~= nil then
    oprot:writeFieldBegin('extra', TType.MAP, 11)
    oprot:writeMapBegin(TType.STRING, TType.STRING, ttable_size(self.extra))
    for kiter28,viter29 in pairs(self.extra) do
      oprot:writeString(kiter28)
      oprot:writeString(viter29)
    end
    oprot:writeMapEnd()
    oprot:writeFieldEnd()
  end
  oprot:writeFieldStop()
  oprot:writeStructEnd()
end

TimRoomBean = __TObject:new{
  founder,
  managers,
  cover,
  topic,
  label,
  gtype,
  kind,
  createtime,
  extend,
  extra
}

function TimRoomBean:read(iprot)
  iprot:readStructBegin()
  while true do
    local fname, ftype, fid = iprot:readFieldBegin()
    if ftype == TType.STOP then
      break
    elseif fid == 1 then
      if ftype == TType.STRING then
        self.founder = iprot:readString()
      else
        iprot:skip(ftype)
      end
    elseif fid == 2 then
      if ftype == TType.LIST then
        self.managers = {}
        local _etype33, _size30 = iprot:readListBegin()
        for _i=1,_size30 do
          local _elem34 = iprot:readString()
          table.insert(self.managers, _elem34)
        end
        iprot:readListEnd()
      else
        iprot:skip(ftype)
      end
    elseif fid == 3 then
      if ftype == TType.STRING then
        self.cover = iprot:readString()
      else
        iprot:skip(ftype)
      end
    elseif fid == 4 then
      if ftype == TType.STRING then
        self.topic = iprot:readString()
      else
        iprot:skip(ftype)
      end
    elseif fid == 5 then
      if ftype == TType.STRING then
        self.label = iprot:readString()
      else
        iprot:skip(ftype)
      end
    elseif fid == 6 then
      if ftype == TType.BYTE then
        self.gtype = iprot:readByte()
      else
        iprot:skip(ftype)
      end
    elseif fid == 7 then
      if ftype == TType.I64 then
        self.kind = iprot:readI64()
      else
        iprot:skip(ftype)
      end
    elseif fid == 8 then
      if ftype == TType.I64 then
        self.createtime = iprot:readI64()
      else
        iprot:skip(ftype)
      end
    elseif fid == 9 then
      if ftype == TType.MAP then
        self.extend = {}
        local _ktype36, _vtype37, _size35 = iprot:readMapBegin() 
        for _i=1,_size35 do
          local _key39 = iprot:readString()
          local _val40 = iprot:readString()
          self.extend[_key39] = _val40
        end
        iprot:readMapEnd()
      else
        iprot:skip(ftype)
      end
    elseif fid == 10 then
      if ftype == TType.MAP then
        self.extra = {}
        local _ktype42, _vtype43, _size41 = iprot:readMapBegin() 
        for _i=1,_size41 do
          local _key45 = iprot:readString()
          local _val46 = iprot:readString()
          self.extra[_key45] = _val46
        end
        iprot:readMapEnd()
      else
        iprot:skip(ftype)
      end
    else
      iprot:skip(ftype)
    end
    iprot:readFieldEnd()
  end
  iprot:readStructEnd()
end

function TimRoomBean:write(oprot)
  oprot:writeStructBegin('TimRoomBean')
  if self.founder ~= nil then
    oprot:writeFieldBegin('founder', TType.STRING, 1)
    oprot:writeString(self.founder)
    oprot:writeFieldEnd()
  end
  if self.managers ~= nil then
    oprot:writeFieldBegin('managers', TType.LIST, 2)
    oprot:writeListBegin(TType.STRING, #self.managers)
    for _,iter47 in ipairs(self.managers) do
      oprot:writeString(iter47)
    end
    oprot:writeListEnd()
    oprot:writeFieldEnd()
  end
  if self.cover ~= nil then
    oprot:writeFieldBegin('cover', TType.STRING, 3)
    oprot:writeString(self.cover)
    oprot:writeFieldEnd()
  end
  if self.topic ~= nil then
    oprot:writeFieldBegin('topic', TType.STRING, 4)
    oprot:writeString(self.topic)
    oprot:writeFieldEnd()
  end
  if self.label ~= nil then
    oprot:writeFieldBegin('label', TType.STRING, 5)
    oprot:writeString(self.label)
    oprot:writeFieldEnd()
  end
  if self.gtype ~= nil then
    oprot:writeFieldBegin('gtype', TType.BYTE, 6)
    oprot:writeByte(self.gtype)
    oprot:writeFieldEnd()
  end
  if self.kind ~= nil then
    oprot:writeFieldBegin('kind', TType.I64, 7)
    oprot:writeI64(self.kind)
    oprot:writeFieldEnd()
  end
  if self.createtime ~= nil then
    oprot:writeFieldBegin('createtime', TType.I64, 8)
    oprot:writeI64(self.createtime)
    oprot:writeFieldEnd()
  end
  if self.extend ~= nil then
    oprot:writeFieldBegin('extend', TType.MAP, 9)
    oprot:writeMapBegin(TType.STRING, TType.STRING, ttable_size(self.extend))
    for kiter48,viter49 in pairs(self.extend) do
      oprot:writeString(kiter48)
      oprot:writeString(viter49)
    end
    oprot:writeMapEnd()
    oprot:writeFieldEnd()
  end
  if self.extra ~= nil then
    oprot:writeFieldBegin('extra', TType.MAP, 10)
    oprot:writeMapBegin(TType.STRING, TType.STRING, ttable_size(self.extra))
    for kiter50,viter51 in pairs(self.extra) do
      oprot:writeString(kiter50)
      oprot:writeString(viter51)
    end
    oprot:writeMapEnd()
    oprot:writeFieldEnd()
  end
  oprot:writeFieldStop()
  oprot:writeStructEnd()
end

TimAuth = __TObject:new{
  name,
  pwd,
  domain,
  resource,
  termtyp,
  token,
  extend
}

function TimAuth:read(iprot)
  iprot:readStructBegin()
  while true do
    local fname, ftype, fid = iprot:readFieldBegin()
    if ftype == TType.STOP then
      break
    elseif fid == 1 then
      if ftype == TType.STRING then
        self.name = iprot:readString()
      else
        iprot:skip(ftype)
      end
    elseif fid == 2 then
      if ftype == TType.STRING then
        self.pwd = iprot:readString()
      else
        iprot:skip(ftype)
      end
    elseif fid == 3 then
      if ftype == TType.STRING then
        self.domain = iprot:readString()
      else
        iprot:skip(ftype)
      end
    elseif fid == 4 then
      if ftype == TType.STRING then
        self.resource = iprot:readString()
      else
        iprot:skip(ftype)
      end
    elseif fid == 5 then
      if ftype == TType.BYTE then
        self.termtyp = iprot:readByte()
      else
        iprot:skip(ftype)
      end
    elseif fid == 6 then
      if ftype == TType.I64 then
        self.token = iprot:readI64()
      else
        iprot:skip(ftype)
      end
    elseif fid == 7 then
      if ftype == TType.MAP then
        self.extend = {}
        local _ktype53, _vtype54, _size52 = iprot:readMapBegin() 
        for _i=1,_size52 do
          local _key56 = iprot:readString()
          local _val57 = iprot:readString()
          self.extend[_key56] = _val57
        end
        iprot:readMapEnd()
      else
        iprot:skip(ftype)
      end
    else
      iprot:skip(ftype)
    end
    iprot:readFieldEnd()
  end
  iprot:readStructEnd()
end

function TimAuth:write(oprot)
  oprot:writeStructBegin('TimAuth')
  if self.name ~= nil then
    oprot:writeFieldBegin('name', TType.STRING, 1)
    oprot:writeString(self.name)
    oprot:writeFieldEnd()
  end
  if self.pwd ~= nil then
    oprot:writeFieldBegin('pwd', TType.STRING, 2)
    oprot:writeString(self.pwd)
    oprot:writeFieldEnd()
  end
  if self.domain ~= nil then
    oprot:writeFieldBegin('domain', TType.STRING, 3)
    oprot:writeString(self.domain)
    oprot:writeFieldEnd()
  end
  if self.resource ~= nil then
    oprot:writeFieldBegin('resource', TType.STRING, 4)
    oprot:writeString(self.resource)
    oprot:writeFieldEnd()
  end
  if self.termtyp ~= nil then
    oprot:writeFieldBegin('termtyp', TType.BYTE, 5)
    oprot:writeByte(self.termtyp)
    oprot:writeFieldEnd()
  end
  if self.token ~= nil then
    oprot:writeFieldBegin('token', TType.I64, 6)
    oprot:writeI64(self.token)
    oprot:writeFieldEnd()
  end
  if self.extend ~= nil then
    oprot:writeFieldBegin('extend', TType.MAP, 7)
    oprot:writeMapBegin(TType.STRING, TType.STRING, ttable_size(self.extend))
    for kiter58,viter59 in pairs(self.extend) do
      oprot:writeString(kiter58)
      oprot:writeString(viter59)
    end
    oprot:writeMapEnd()
    oprot:writeFieldEnd()
  end
  oprot:writeFieldStop()
  oprot:writeStructEnd()
end

TimPresence = __TObject:new{
  id,
  offline,
  subStatus,
  fromTid,
  toTid,
  toList,
  show,
  status,
  extend,
  extra
}

function TimPresence:read(iprot)
  iprot:readStructBegin()
  while true do
    local fname, ftype, fid = iprot:readFieldBegin()
    if ftype == TType.STOP then
      break
    elseif fid == 1 then
      if ftype == TType.I64 then
        self.id = iprot:readI64()
      else
        iprot:skip(ftype)
      end
    elseif fid == 2 then
      if ftype == TType.BOOL then
        self.offline = iprot:readBool()
      else
        iprot:skip(ftype)
      end
    elseif fid == 3 then
      if ftype == TType.BYTE then
        self.subStatus = iprot:readByte()
      else
        iprot:skip(ftype)
      end
    elseif fid == 4 then
      if ftype == TType.STRUCT then
        self.fromTid = Tid:new{}
        self.fromTid:read(iprot)
      else
        iprot:skip(ftype)
      end
    elseif fid == 5 then
      if ftype == TType.STRUCT then
        self.toTid = Tid:new{}
        self.toTid:read(iprot)
      else
        iprot:skip(ftype)
      end
    elseif fid == 6 then
      if ftype == TType.LIST then
        self.toList = {}
        local _etype63, _size60 = iprot:readListBegin()
        for _i=1,_size60 do
          local _elem64 = iprot:readString()
          table.insert(self.toList, _elem64)
        end
        iprot:readListEnd()
      else
        iprot:skip(ftype)
      end
    elseif fid == 7 then
      if ftype == TType.I16 then
        self.show = iprot:readI16()
      else
        iprot:skip(ftype)
      end
    elseif fid == 8 then
      if ftype == TType.STRING then
        self.status = iprot:readString()
      else
        iprot:skip(ftype)
      end
    elseif fid == 9 then
      if ftype == TType.MAP then
        self.extend = {}
        local _ktype66, _vtype67, _size65 = iprot:readMapBegin() 
        for _i=1,_size65 do
          local _key69 = iprot:readString()
          local _val70 = iprot:readString()
          self.extend[_key69] = _val70
        end
        iprot:readMapEnd()
      else
        iprot:skip(ftype)
      end
    elseif fid == 10 then
      if ftype == TType.MAP then
        self.extra = {}
        local _ktype72, _vtype73, _size71 = iprot:readMapBegin() 
        for _i=1,_size71 do
          local _key75 = iprot:readString()
          local _val76 = iprot:readString()
          self.extra[_key75] = _val76
        end
        iprot:readMapEnd()
      else
        iprot:skip(ftype)
      end
    else
      iprot:skip(ftype)
    end
    iprot:readFieldEnd()
  end
  iprot:readStructEnd()
end

function TimPresence:write(oprot)
  oprot:writeStructBegin('TimPresence')
  if self.id ~= nil then
    oprot:writeFieldBegin('id', TType.I64, 1)
    oprot:writeI64(self.id)
    oprot:writeFieldEnd()
  end
  if self.offline ~= nil then
    oprot:writeFieldBegin('offline', TType.BOOL, 2)
    oprot:writeBool(self.offline)
    oprot:writeFieldEnd()
  end
  if self.subStatus ~= nil then
    oprot:writeFieldBegin('subStatus', TType.BYTE, 3)
    oprot:writeByte(self.subStatus)
    oprot:writeFieldEnd()
  end
  if self.fromTid ~= nil then
    oprot:writeFieldBegin('fromTid', TType.STRUCT, 4)
    self.fromTid:write(oprot)
    oprot:writeFieldEnd()
  end
  if self.toTid ~= nil then
    oprot:writeFieldBegin('toTid', TType.STRUCT, 5)
    self.toTid:write(oprot)
    oprot:writeFieldEnd()
  end
  if self.toList ~= nil then
    oprot:writeFieldBegin('toList', TType.LIST, 6)
    oprot:writeListBegin(TType.STRING, #self.toList)
    for _,iter77 in ipairs(self.toList) do
      oprot:writeString(iter77)
    end
    oprot:writeListEnd()
    oprot:writeFieldEnd()
  end
  if self.show ~= nil then
    oprot:writeFieldBegin('show', TType.I16, 7)
    oprot:writeI16(self.show)
    oprot:writeFieldEnd()
  end
  if self.status ~= nil then
    oprot:writeFieldBegin('status', TType.STRING, 8)
    oprot:writeString(self.status)
    oprot:writeFieldEnd()
  end
  if self.extend ~= nil then
    oprot:writeFieldBegin('extend', TType.MAP, 9)
    oprot:writeMapBegin(TType.STRING, TType.STRING, ttable_size(self.extend))
    for kiter78,viter79 in pairs(self.extend) do
      oprot:writeString(kiter78)
      oprot:writeString(viter79)
    end
    oprot:writeMapEnd()
    oprot:writeFieldEnd()
  end
  if self.extra ~= nil then
    oprot:writeFieldBegin('extra', TType.MAP, 10)
    oprot:writeMapBegin(TType.STRING, TType.STRING, ttable_size(self.extra))
    for kiter80,viter81 in pairs(self.extra) do
      oprot:writeString(kiter80)
      oprot:writeString(viter81)
    end
    oprot:writeMapEnd()
    oprot:writeFieldEnd()
  end
  oprot:writeFieldStop()
  oprot:writeStructEnd()
end

TimMessage = __TObject:new{
  msType,
  odType,
  id,
  mid,
  bnType,
  fromTid,
  toTid,
  roomTid,
  dataBinary,
  dataString,
  isOffline,
  timestamp,
  udtype,
  udshow,
  extend,
  extra
}

function TimMessage:read(iprot)
  iprot:readStructBegin()
  while true do
    local fname, ftype, fid = iprot:readFieldBegin()
    if ftype == TType.STOP then
      break
    elseif fid == 1 then
      if ftype == TType.BYTE then
        self.msType = iprot:readByte()
      else
        iprot:skip(ftype)
      end
    elseif fid == 2 then
      if ftype == TType.BYTE then
        self.odType = iprot:readByte()
      else
        iprot:skip(ftype)
      end
    elseif fid == 3 then
      if ftype == TType.I64 then
        self.id = iprot:readI64()
      else
        iprot:skip(ftype)
      end
    elseif fid == 4 then
      if ftype == TType.I64 then
        self.mid = iprot:readI64()
      else
        iprot:skip(ftype)
      end
    elseif fid == 5 then
      if ftype == TType.I32 then
        self.bnType = iprot:readI32()
      else
        iprot:skip(ftype)
      end
    elseif fid == 6 then
      if ftype == TType.STRUCT then
        self.fromTid = Tid:new{}
        self.fromTid:read(iprot)
      else
        iprot:skip(ftype)
      end
    elseif fid == 7 then
      if ftype == TType.STRUCT then
        self.toTid = Tid:new{}
        self.toTid:read(iprot)
      else
        iprot:skip(ftype)
      end
    elseif fid == 8 then
      if ftype == TType.STRUCT then
        self.roomTid = Tid:new{}
        self.roomTid:read(iprot)
      else
        iprot:skip(ftype)
      end
    elseif fid == 9 then
      if ftype == TType.STRING then
        self.dataBinary = iprot:readString()
      else
        iprot:skip(ftype)
      end
    elseif fid == 10 then
      if ftype == TType.STRING then
        self.dataString = iprot:readString()
      else
        iprot:skip(ftype)
      end
    elseif fid == 11 then
      if ftype == TType.BOOL then
        self.isOffline = iprot:readBool()
      else
        iprot:skip(ftype)
      end
    elseif fid == 12 then
      if ftype == TType.I64 then
        self.timestamp = iprot:readI64()
      else
        iprot:skip(ftype)
      end
    elseif fid == 13 then
      if ftype == TType.I16 then
        self.udtype = iprot:readI16()
      else
        iprot:skip(ftype)
      end
    elseif fid == 14 then
      if ftype == TType.I16 then
        self.udshow = iprot:readI16()
      else
        iprot:skip(ftype)
      end
    elseif fid == 15 then
      if ftype == TType.MAP then
        self.extend = {}
        local _ktype83, _vtype84, _size82 = iprot:readMapBegin() 
        for _i=1,_size82 do
          local _key86 = iprot:readString()
          local _val87 = iprot:readString()
          self.extend[_key86] = _val87
        end
        iprot:readMapEnd()
      else
        iprot:skip(ftype)
      end
    elseif fid == 16 then
      if ftype == TType.MAP then
        self.extra = {}
        local _ktype89, _vtype90, _size88 = iprot:readMapBegin() 
        for _i=1,_size88 do
          local _key92 = iprot:readString()
          local _val93 = iprot:readString()
          self.extra[_key92] = _val93
        end
        iprot:readMapEnd()
      else
        iprot:skip(ftype)
      end
    else
      iprot:skip(ftype)
    end
    iprot:readFieldEnd()
  end
  iprot:readStructEnd()
end

function TimMessage:write(oprot)
  oprot:writeStructBegin('TimMessage')
  if self.msType ~= nil then
    oprot:writeFieldBegin('msType', TType.BYTE, 1)
    oprot:writeByte(self.msType)
    oprot:writeFieldEnd()
  end
  if self.odType ~= nil then
    oprot:writeFieldBegin('odType', TType.BYTE, 2)
    oprot:writeByte(self.odType)
    oprot:writeFieldEnd()
  end
  if self.id ~= nil then
    oprot:writeFieldBegin('id', TType.I64, 3)
    oprot:writeI64(self.id)
    oprot:writeFieldEnd()
  end
  if self.mid ~= nil then
    oprot:writeFieldBegin('mid', TType.I64, 4)
    oprot:writeI64(self.mid)
    oprot:writeFieldEnd()
  end
  if self.bnType ~= nil then
    oprot:writeFieldBegin('bnType', TType.I32, 5)
    oprot:writeI32(self.bnType)
    oprot:writeFieldEnd()
  end
  if self.fromTid ~= nil then
    oprot:writeFieldBegin('fromTid', TType.STRUCT, 6)
    self.fromTid:write(oprot)
    oprot:writeFieldEnd()
  end
  if self.toTid ~= nil then
    oprot:writeFieldBegin('toTid', TType.STRUCT, 7)
    self.toTid:write(oprot)
    oprot:writeFieldEnd()
  end
  if self.roomTid ~= nil then
    oprot:writeFieldBegin('roomTid', TType.STRUCT, 8)
    self.roomTid:write(oprot)
    oprot:writeFieldEnd()
  end
  if self.dataBinary ~= nil then
    oprot:writeFieldBegin('dataBinary', TType.STRING, 9)
    oprot:writeString(self.dataBinary)
    oprot:writeFieldEnd()
  end
  if self.dataString ~= nil then
    oprot:writeFieldBegin('dataString', TType.STRING, 10)
    oprot:writeString(self.dataString)
    oprot:writeFieldEnd()
  end
  if self.isOffline ~= nil then
    oprot:writeFieldBegin('isOffline', TType.BOOL, 11)
    oprot:writeBool(self.isOffline)
    oprot:writeFieldEnd()
  end
  if self.timestamp ~= nil then
    oprot:writeFieldBegin('timestamp', TType.I64, 12)
    oprot:writeI64(self.timestamp)
    oprot:writeFieldEnd()
  end
  if self.udtype ~= nil then
    oprot:writeFieldBegin('udtype', TType.I16, 13)
    oprot:writeI16(self.udtype)
    oprot:writeFieldEnd()
  end
  if self.udshow ~= nil then
    oprot:writeFieldBegin('udshow', TType.I16, 14)
    oprot:writeI16(self.udshow)
    oprot:writeFieldEnd()
  end
  if self.extend ~= nil then
    oprot:writeFieldBegin('extend', TType.MAP, 15)
    oprot:writeMapBegin(TType.STRING, TType.STRING, ttable_size(self.extend))
    for kiter94,viter95 in pairs(self.extend) do
      oprot:writeString(kiter94)
      oprot:writeString(viter95)
    end
    oprot:writeMapEnd()
    oprot:writeFieldEnd()
  end
  if self.extra ~= nil then
    oprot:writeFieldBegin('extra', TType.MAP, 16)
    oprot:writeMapBegin(TType.STRING, TType.STRING, ttable_size(self.extra))
    for kiter96,viter97 in pairs(self.extra) do
      oprot:writeString(kiter96)
      oprot:writeString(viter97)
    end
    oprot:writeMapEnd()
    oprot:writeFieldEnd()
  end
  oprot:writeFieldStop()
  oprot:writeStructEnd()
end

TimStream = __TObject:new{
  id,
  VNode,
  dtype,
  body,
  fromNode
}

function TimStream:read(iprot)
  iprot:readStructBegin()
  while true do
    local fname, ftype, fid = iprot:readFieldBegin()
    if ftype == TType.STOP then
      break
    elseif fid == 1 then
      if ftype == TType.I64 then
        self.id = iprot:readI64()
      else
        iprot:skip(ftype)
      end
    elseif fid == 2 then
      if ftype == TType.STRING then
        self.VNode = iprot:readString()
      else
        iprot:skip(ftype)
      end
    elseif fid == 3 then
      if ftype == TType.BYTE then
        self.dtype = iprot:readByte()
      else
        iprot:skip(ftype)
      end
    elseif fid == 4 then
      if ftype == TType.STRING then
        self.body = iprot:readString()
      else
        iprot:skip(ftype)
      end
    elseif fid == 5 then
      if ftype == TType.STRING then
        self.fromNode = iprot:readString()
      else
        iprot:skip(ftype)
      end
    else
      iprot:skip(ftype)
    end
    iprot:readFieldEnd()
  end
  iprot:readStructEnd()
end

function TimStream:write(oprot)
  oprot:writeStructBegin('TimStream')
  if self.id ~= nil then
    oprot:writeFieldBegin('id', TType.I64, 1)
    oprot:writeI64(self.id)
    oprot:writeFieldEnd()
  end
  if self.VNode ~= nil then
    oprot:writeFieldBegin('VNode', TType.STRING, 2)
    oprot:writeString(self.VNode)
    oprot:writeFieldEnd()
  end
  if self.dtype ~= nil then
    oprot:writeFieldBegin('dtype', TType.BYTE, 3)
    oprot:writeByte(self.dtype)
    oprot:writeFieldEnd()
  end
  if self.body ~= nil then
    oprot:writeFieldBegin('body', TType.STRING, 4)
    oprot:writeString(self.body)
    oprot:writeFieldEnd()
  end
  if self.fromNode ~= nil then
    oprot:writeFieldBegin('fromNode', TType.STRING, 5)
    oprot:writeString(self.fromNode)
    oprot:writeFieldEnd()
  end
  oprot:writeFieldStop()
  oprot:writeStructEnd()
end

TimNodes = __TObject:new{
  ntype,
  nodelist,
  usermap,
  roommap,
  node
}

function TimNodes:read(iprot)
  iprot:readStructBegin()
  while true do
    local fname, ftype, fid = iprot:readFieldBegin()
    if ftype == TType.STOP then
      break
    elseif fid == 1 then
      if ftype == TType.I32 then
        self.ntype = iprot:readI32()
      else
        iprot:skip(ftype)
      end
    elseif fid == 2 then
      if ftype == TType.LIST then
        self.nodelist = {}
        local _etype101, _size98 = iprot:readListBegin()
        for _i=1,_size98 do
          local _elem102 = iprot:readString()
          table.insert(self.nodelist, _elem102)
        end
        iprot:readListEnd()
      else
        iprot:skip(ftype)
      end
    elseif fid == 3 then
      if ftype == TType.MAP then
        self.usermap = {}
        local _ktype104, _vtype105, _size103 = iprot:readMapBegin() 
        for _i=1,_size103 do
          local _key107 = iprot:readString()
          local _val108 = TimUserBean:new{}
          _val108:read(iprot)
          self.usermap[_key107] = _val108
        end
        iprot:readMapEnd()
      else
        iprot:skip(ftype)
      end
    elseif fid == 4 then
      if ftype == TType.MAP then
        self.roommap = {}
        local _ktype110, _vtype111, _size109 = iprot:readMapBegin() 
        for _i=1,_size109 do
          local _key113 = iprot:readString()
          local _val114 = TimRoomBean:new{}
          _val114:read(iprot)
          self.roommap[_key113] = _val114
        end
        iprot:readMapEnd()
      else
        iprot:skip(ftype)
      end
    elseif fid == 5 then
      if ftype == TType.STRING then
        self.node = iprot:readString()
      else
        iprot:skip(ftype)
      end
    else
      iprot:skip(ftype)
    end
    iprot:readFieldEnd()
  end
  iprot:readStructEnd()
end

function TimNodes:write(oprot)
  oprot:writeStructBegin('TimNodes')
  if self.ntype ~= nil then
    oprot:writeFieldBegin('ntype', TType.I32, 1)
    oprot:writeI32(self.ntype)
    oprot:writeFieldEnd()
  end
  if self.nodelist ~= nil then
    oprot:writeFieldBegin('nodelist', TType.LIST, 2)
    oprot:writeListBegin(TType.STRING, #self.nodelist)
    for _,iter115 in ipairs(self.nodelist) do
      oprot:writeString(iter115)
    end
    oprot:writeListEnd()
    oprot:writeFieldEnd()
  end
  if self.usermap ~= nil then
    oprot:writeFieldBegin('usermap', TType.MAP, 3)
    oprot:writeMapBegin(TType.STRING, TType.STRUCT, ttable_size(self.usermap))
    for kiter116,viter117 in pairs(self.usermap) do
      oprot:writeString(kiter116)
      viter117:write(oprot)
    end
    oprot:writeMapEnd()
    oprot:writeFieldEnd()
  end
  if self.roommap ~= nil then
    oprot:writeFieldBegin('roommap', TType.MAP, 4)
    oprot:writeMapBegin(TType.STRING, TType.STRUCT, ttable_size(self.roommap))
    for kiter118,viter119 in pairs(self.roommap) do
      oprot:writeString(kiter118)
      viter119:write(oprot)
    end
    oprot:writeMapEnd()
    oprot:writeFieldEnd()
  end
  if self.node ~= nil then
    oprot:writeFieldBegin('node', TType.STRING, 5)
    oprot:writeString(self.node)
    oprot:writeFieldEnd()
  end
  oprot:writeFieldStop()
  oprot:writeStructEnd()
end

TimMessageList = __TObject:new{
  id,
  messageList
}

function TimMessageList:read(iprot)
  iprot:readStructBegin()
  while true do
    local fname, ftype, fid = iprot:readFieldBegin()
    if ftype == TType.STOP then
      break
    elseif fid == 1 then
      if ftype == TType.I64 then
        self.id = iprot:readI64()
      else
        iprot:skip(ftype)
      end
    elseif fid == 2 then
      if ftype == TType.LIST then
        self.messageList = {}
        local _etype123, _size120 = iprot:readListBegin()
        for _i=1,_size120 do
          local _elem124 = TimMessage:new{}
          _elem124:read(iprot)
          table.insert(self.messageList, _elem124)
        end
        iprot:readListEnd()
      else
        iprot:skip(ftype)
      end
    else
      iprot:skip(ftype)
    end
    iprot:readFieldEnd()
  end
  iprot:readStructEnd()
end

function TimMessageList:write(oprot)
  oprot:writeStructBegin('TimMessageList')
  if self.id ~= nil then
    oprot:writeFieldBegin('id', TType.I64, 1)
    oprot:writeI64(self.id)
    oprot:writeFieldEnd()
  end
  if self.messageList ~= nil then
    oprot:writeFieldBegin('messageList', TType.LIST, 2)
    oprot:writeListBegin(TType.STRUCT, #self.messageList)
    for _,iter125 in ipairs(self.messageList) do
      iter125:write(oprot)
    end
    oprot:writeListEnd()
    oprot:writeFieldEnd()
  end
  oprot:writeFieldStop()
  oprot:writeStructEnd()
end