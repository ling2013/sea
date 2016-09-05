# 作物成熟输出

>接口描述

| 接口名称 | 作物成熟输出 |
|----------|--------|
|**接口地址**|```/Farmstate/getoutput```|
|**请求方式**|```POST```|

##请求参数
[<公共传入参数>](../README.md)  

|编码|名称|类型|必须|说明|默认值|
|:---|:---|:---|:--:|:---|:-----|
|place|土地位置|```int```|是|操作的土地位置，0-23|无|

##返回参数

|编码|名称|类型|说明|默认值|
|:---|:---|:---|:--|:---|:-----|
|code|状态码|```int```|返回状态码，用于调试|无|
|status|状态|```bool```|返回状态：true-成功，false-失败|无|
|info|说明|```string```|返回结果说明|无|
|data|返回数据|```object```|暂无|无|

参数项：data

|编码 |名称|类型|说明|
|:----|:---|:---|:---|
|place|操作的土地|```int```|操作的土地位置，0-23|
|status|此块土地状态|```array```|此块土地状态|

参数项：status

|编码 |名称|类型|说明|
|:----|:---|:---|:---|
|crop_id|作物ID|```int```|作物ID|
|crop_status|作物生长状态|```int```|0-未种植，1-新种植，6-收获期，7-枯萎|
|weed_num|杂草数量|```int```|杂草数量|
|pest_num|害虫数量|```int```|害虫数量|
|humidity|湿度|```int```|1-正常，0-干旱|
|health|健康度|```int```|健康度,1-100|
|harvest_num|收获次数|```int```|收获次数|
|output|产量|```int```|产量|
|least_remain_output|最少剩余产量|```int```|最少剩余产量|
|remain_output|剩余产量|```int```|剩余产量|
|steal_record|被采摘记录|```array```|被采摘记录|
|fertilize|可施肥阶段|```int```|可施肥阶段|
|plant_time|种植时间|```int```|种植时间|
|update_time|更新时间|```int```|更新时间|
|land_type|土地类型|```int```|土地类型|

##接口示例

>请求示例

```

```

>接收成功示例

```

```

>错误代码

|代码|说明|
|----|----|
|72161|请选择要操作的土地|
|72162|此土地不存在|
|72163|土地尚未种植农作物|
|72164|作物尚未成熟|
|72165|更新数据失败|