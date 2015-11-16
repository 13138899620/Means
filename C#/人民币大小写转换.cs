using System;
using System.Data;
using System.Configuration;
using System.Linq;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.HtmlControls;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Xml.Linq;
using System.Text.RegularExpressions;

/// <summary>
/// Class1 的摘要描述
/// </summary>
public class Class1
{
    public Class1()
    {
    }
    /***
    ** HongShijin
    ** Me@HongShijin.com
    ** 2009-3-15 10:13:00.00000
    ** text/C#
    ***/

    /// <summary>
    /// 转换人民币大写
    /// </summary>
    /// <param name="input">数字输入</param>
    /// <returns>大写金额</returns>
    public static string ToSuperRMB(object input)
    {
        var d = decimal.Zero;
        if (input == null)
            return ToSuperRMB(d);

        if (input is decimal)
            return ToSuperRMB((decimal)input);

        if (input is double)
            return ToSuperRMB(new decimal((double)input));

        if (input is float)
            return ToSuperRMB(new decimal((float)input));

        if (input is int)
            return ToSuperRMB(new decimal((int)input));

        if (input is long)
            return ToSuperRMB(new decimal((long)input));

        if (input is uint)
            return ToSuperRMB(new decimal((uint)input));

        if (input is ulong)
            return ToSuperRMB(new decimal((ulong)input));

        if (decimal.TryParse(input.ToString(), out d))
            return ToSuperRMB(d);

        return input.ToString();//return ToSuperRMB(d);//
    }

    /// <summary>
    /// 转换人民币大写
    /// </summary>
    /// <param name="input">数字输入</param>
    /// <returns>大写金额</returns>
    public static string ToSuperRMB(ulong input)
    {
        return ToSuperRMB(new decimal(input));
    }

    /// <summary>
    /// 转换人民币大写
    /// </summary>
    /// <param name="input">数字输入</param>
    /// <returns>大写金额</returns>
    public static string ToSuperRMB(uint input)
    {
        return ToSuperRMB(new decimal(input));
    }

    /// <summary>
    /// 转换人民币大写
    /// </summary>
    /// <param name="input">数字输入</param>
    /// <returns>大写金额</returns>
    public static string ToSuperRMB(long input)
    {
        return ToSuperRMB(new decimal(input));
    }

    /// <summary>
    /// 转换人民币大写
    /// </summary>
    /// <param name="input">数字输入</param>
    /// <returns>大写金额</returns>
    public static string ToSuperRMB(int[] input)
    {
        return ToSuperRMB(new decimal(input));
    }

    /// <summary>
    /// 转换人民币大写
    /// </summary>
    /// <param name="input">数字输入</param>
    /// <returns>大写金额</returns>
    public static string ToSuperRMB(int input)
    {
        return ToSuperRMB(new decimal(input));
    }

    /// <summary>
    /// 转换人民币大写
    /// </summary>
    /// <param name="input">数字输入</param>
    /// <returns>大写金额</returns>
    public static string ToSuperRMB(float input)
    {
        return ToSuperRMB(new decimal(input));
    }

    /// <summary>
    /// 转换人民币大写
    /// </summary>
    /// <param name="input">数字输入</param>
    /// <returns>大写金额</returns>
    public static string ToSuperRMB(double input)
    {
        return ToSuperRMB(new decimal(input));
    }

    /// <summary>
    /// 转换人民币大写
    /// </summary>
    /// <param name="input">数字输入</param>
    /// <returns>大写金额</returns>
    public static string ToSuperRMB(decimal input)
    {
        var n = "零壹贰叁肆伍陆柒捌玖";
        var u = "仟佰拾京仟佰拾吉仟佰拾兆仟佰拾億仟佰拾萬仟佰拾圆角分厘毫";//"仟佰拾京仟佰拾吉仟佰拾兆仟佰拾亿仟佰拾万仟佰拾圆角分厘毫"
        var m = input;
        if (m > decimal.Zero)
            m *= 10000M;
        else
            m *= -10000M;
        var t = m.ToString("0");
        if (t == "0")
            return "零圆整";

        if (t.Length > u.Length)
            throw new ArgumentOutOfRangeException();

        u = u.Substring(u.Length - t.Length);
        for (var i = t.Length - 1; i >= 0; i--)
            t = t.Remove(i) + n[t[i] - '0'] + u[i] + t.Substring(i + 1);
        t = Regex.Replace(t, "零+[^圆萬億兆吉京]", "零", RegexOptions.Compiled); //t = "壹仟零佰零拾零京叁仟零佰伍拾贰吉零仟零佰零拾零兆叁仟伍佰贰拾零億肆仟零佰贰拾零萬零仟零佰零拾伍圆壹角零分零厘伍毫";
        t = Regex.Replace(t, "零{2,}", "零", RegexOptions.Compiled); //t = "壹仟零零零京叁仟零伍拾贰吉零零零零兆叁仟伍佰贰拾零億肆仟零贰拾零萬零零零伍圆壹角零零伍毫"
        t = Regex.Replace(t, "零+([圆萬億兆吉京])", "$1", RegexOptions.Compiled); //t = "壹仟零京叁仟零伍拾贰吉零兆叁仟伍佰贰拾零億肆仟零贰拾零萬零伍圆壹角零伍毫"
        t = Regex.Replace(t, "([萬億兆吉京])[萬億兆吉京]+", "$1", RegexOptions.Compiled); //t = "壹仟京叁仟零伍拾贰吉兆叁仟伍佰贰拾億肆仟零贰拾萬零伍圆壹角零伍毫"
        t = Regex.Replace(t, "^[萬億兆吉京]+", string.Empty, RegexOptions.Compiled); //"壹仟京叁仟零伍拾贰吉叁仟伍佰贰拾億肆仟零贰拾萬零伍圆壹角零伍毫"
        if (t[0] == '零')
            t = t.Substring(1);
        if (t[t.Length - 1] == '零')
            t = t.Remove(t.Length - 1);
        if (t[t.Length - 1] == '圆')
            t = t + "整";
        if (input >= decimal.Zero)
            return t;

        return "負" + t;////负
    }


}

