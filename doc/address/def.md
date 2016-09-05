# 设置收货地址是否为默认

>接口描述（用户必须登录）

| 接口名称 | 设置收货地址 |
|----------|--------|
|**接口地址**|/Address/def|
|**请求方式**|POST|
|**数据格式**|<code>JSON</code>|

##请求参数
[<公共传入参数>](../README.md)  

|编码|名称|类型|必须|说明|默认|
|:---|:---|:---|:--|:---|:-----|
|id|地址ID|<code>int</code>|是|地址主键ID|
|is_default|是否为默认地址|<code>int</code>|否|是否默认：0-否，1-默认|0|

##返回参数
[<公共返回参数>](../README.md)

|编码|名称|类型|说明|默认值|
|:---|:---|:---|:--|:---|:-----|
|code|状态码|<code>int</code>|返回状态码，用于调试|无|
|status|状态|<code>bool</code>|返回状态：true-成功，false-失败|无|

##接口示例

>请求示例


>接收成功示例