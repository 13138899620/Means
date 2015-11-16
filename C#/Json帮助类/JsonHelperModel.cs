using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.IO;

namespace NCX_Common
{
    public static class JsonHelperModel
    {

        /// <summary>
        /// 单条json数据转换为实体
        /// </summary>
        /// <typeparam name="T"></typeparam>
        /// <param name="str">字符窜（格式为{a:'',b:''}）</param>
        /// <returns></returns>
        public static T ConvertToEntity<T>(string str)
        {
            Type t = typeof(T);
            object obj = Activator.CreateInstance(t);
            var properties = t.GetProperties();
            string m = str.Trim('{').Trim('}');
            string[] arr = m.Split(',');
            for (int i = 0; i < arr.Count(); i++)
            {
                for (int k = 0; k < properties.Count(); k++)
                {
                    string Name = arr[i].Substring(0, arr[i].IndexOf(":"));
                    object Value = arr[i].Substring(arr[i].IndexOf(":") + 1);
                    if (properties[k].Name.Equals(Name))
                    {
                        if (properties[k].PropertyType.Equals(typeof(int)))
                        {
                            properties[k].SetValue(obj, Convert.ToInt32(Value), null);
                        }
                        if (properties[k].PropertyType.Equals(typeof(short)))
                        {
                            properties[k].SetValue(obj, Convert.ToInt16(Value), null);
                        }
                        if (properties[k].PropertyType.Equals(typeof(string)))
                        {
                            properties[k].SetValue(obj, Convert.ToString(Value), null);
                        }
                        if (properties[k].PropertyType.Equals(typeof(long)))
                        {
                            properties[k].SetValue(obj, Convert.ToInt64(Value), null);
                        }
                        if (properties[k].PropertyType.Equals(typeof(decimal)))
                        {
                            properties[k].SetValue(obj, Convert.ToDecimal(Value), null);
                        }
                        if (properties[k].PropertyType.Equals(typeof(double)))
                        {
                            properties[k].SetValue(obj, Convert.ToDouble(Value), null);
                        }
                        if (properties[k].PropertyType.Equals(typeof(Nullable<int>)))
                        {
                            properties[k].SetValue(obj, Convert.ToInt32(Value), null);
                        }
                        if (properties[k].PropertyType.Equals(typeof(Nullable<decimal>)))
                        {
                            properties[k].SetValue(obj, Convert.ToDecimal(Value), null);
                        }
                        if (properties[k].PropertyType.Equals(typeof(Nullable<long>)))
                        {
                            properties[k].SetValue(obj, Convert.ToInt64(Value), null);
                        }
                        if (properties[k].PropertyType.Equals(typeof(Nullable<short>)))
                        {
                            properties[k].SetValue(obj, Convert.ToInt16(Value), null);
                        }
                        if (properties[k].PropertyType.Equals(typeof(Nullable<double>)))
                        {
                            properties[k].SetValue(obj, Convert.ToDouble(Value), null);
                        }
                        if (properties[k].PropertyType.Equals(typeof(DateTime)))
                        {
                            properties[k].SetValue(obj, Convert.ToDateTime(Value), null);
                        }
                        if (properties[k].PropertyType.Equals(typeof(Nullable<DateTime>)))
                        {
                            properties[k].SetValue(obj, Convert.ToDateTime(Value), null);
                        }

                    }
                }

            }
            return (T)obj;
        }

        /// <summary>
        /// 多条Json数据转换为泛型数据
        /// </summary>
        /// <typeparam name="T"></typeparam>
        /// <param name="jsonArr">字符窜（格式为[{a:'',b:''},{a:'',b:''},{a:'',b:''}]）</param>
        /// <returns></returns>
        public static List<T> ConvertTolist<T>(this string jsonArr)
        {
            if (!string.IsNullOrEmpty(jsonArr) && jsonArr.StartsWith("[") && jsonArr.EndsWith("]"))
            {
                Type t = typeof(T);
                var proPerties = t.GetProperties();
                List<T> list = new List<T>();
                string recive = jsonArr.Trim('[').Trim(']').Replace("'", "").Replace("\"", "");
                string[] reciveArr = recive.Replace("},{", "};{").Split(';');
                foreach (var item in reciveArr)
                {
                    T obj = ConvertToEntity<T>(item);
                    list.Add(obj);
                }
                return list;
            }
            return null;

        }
    }
}
