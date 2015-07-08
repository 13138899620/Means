using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.IO;

namespace FileStreamTest
{
    class Program
    {
        static void Main(string[] args)
        {
            ////使用FileStream读取文件  按字节读取
            //using (FileStream filestream = new FileStream(@"C:\Users\Yang\Desktop\vs快捷键.txt", FileMode.OpenOrCreate, FileAccess.Read))
            //{
            //    byte[] buffer = new byte[1024 * 1024 * 5];
            //    int read = filestream.Read(buffer, 0, buffer.Length);
            //    string s = Encoding.Default.GetString(buffer, 0, read);
            //    //filestream.Close();
            //    //filestream.Dispose();            
            //    Console.WriteLine(s);
            //}


            //使用FileStream写入文件  按字节写入
            //using (FileStream fileStream = new FileStream(@"C:\Users\Yang\Desktop\vs快捷键.txt", FileMode.OpenOrCreate, FileAccess.Write))
            //{
            //    byte[] buffer = Encoding.Default.GetBytes("有志者，事竟成!");
            //    fileStream.Write(buffer, 0, buffer.Length);
            //}

            //操作多媒体文件
            //string source = @"C:\Users\Yang\Desktop\test.avi";
            //string target = @"C:\Users\Yang\Desktop\new.avi";
            //using (FileStream fileStream = new FileStream(source, FileMode.OpenOrCreate, FileAccess.Read))
            //{
            //    using (FileStream fileStreamWrite = new FileStream(target, FileMode.OpenOrCreate, FileAccess.Write))
            //    {
            //        byte[] buffer = new byte[1024 * 1024 * 5];
            //        //循环读取
            //        while (true)
            //        {
            //            int read = fileStream.Read(buffer, 0, buffer.Length);
            //            if (read == 0)
            //            {
            //                break;
            //            }
            //            fileStreamWrite.Write(buffer, 0, read);
            //        }
            //    }
            //}
            //Console.WriteLine("OK");

            //StreamReader 读取文件
            //using (StreamReader reader = new StreamReader(@"C:\Users\Yang\Desktop\vs快捷键.txt", Encoding.Default))
            //{
            //    while (!reader.EndOfStream)
            //    {
            //        Console.WriteLine(reader.ReadLine());
            //    }
            //}

            //StreamWriter 写入文件
            //using (StreamWriter writer = new StreamWriter(@"C:\Users\Yang\Desktop\new.txt"))
            //{
            //    writer.Write("Yang yi Hard Work!");
            //}
            Console.ReadLine();
        }
    }
}
