using System;

class NumComparer
{
    static void Main()
    {
        Console.Write("a = ");
        double fisrstNum = double.Parse(Console.ReadLine());
        Console.Write("b = ");
        double secondNum = double.Parse(Console.ReadLine());
        Console.Write("Greater: ");
        Console.WriteLine(fisrstNum>secondNum?fisrstNum:secondNum);
    }
}

