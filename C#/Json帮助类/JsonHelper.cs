using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using Newtonsoft.Json;
using System.Data;


namespace NCX_Common
{
    public class JsonHelper
    {
        //对象序列化为Json
        public static string ToJson(object obj)
        {
            JsonSerializerSettings settings = new JsonSerializerSettings();
            settings.ReferenceLoopHandling = ReferenceLoopHandling.Ignore;
            return JsonConvert.SerializeObject(obj);
        }


        //对象序列化为Json(datagrid分页绑定)
        public static string ToJson(object obj, int records)
        {
            string json = ToJson(obj);
            return @"{""total"":" + records.ToString() + @",""rows"":" + json + "}";
        }

        //对象序列化为Json(datagrid分页绑定)
        public static string ToJson(DataTable dt, int records)
        {
            string json = ToJson(dt);
            return @"{""total"":" + records.ToString() + @",""rows"":" + json + "}";
        }
    }
}
