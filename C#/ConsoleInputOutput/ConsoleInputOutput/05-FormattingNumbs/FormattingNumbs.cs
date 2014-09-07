using System;

class FormattingNumbs
{
    static void Main()
    {
        while(true)
        {
        Console.Write("a = ");
        short a = short.Parse(Console.ReadLine());
        Console.Write("b = ");
        float b = float.Parse(Console.ReadLine());
        Console.Write("c = ");
        float c = float.Parse(Console.ReadLine());
        Console.WriteLine("|{0,-10:X}|{1}|{2,10:0.##}|{3,-10:0.###}|",a,Convert.ToString(a,2).PadLeft(10,'0'),b,c);
        }
    }
}

