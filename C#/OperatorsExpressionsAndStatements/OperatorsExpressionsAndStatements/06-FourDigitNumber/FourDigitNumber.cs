using System;

class FourDigitNumber
{
    static void Main()
    {
        Console.Write("Please enter a four digit number: ");
        int abcd = int.Parse(Console.ReadLine());
        int a = (abcd / 1000) % 10;
        int b = (abcd / 100) % 10;
        int c = (abcd / 10) % 10;
        int d = abcd % 10;
        Console.WriteLine(a+b+c+d);
        Console.Write(d);
        Console.Write(c);
        Console.Write(b);
        Console.Write(a);
        Console.WriteLine();
        Console.WriteLine("{0}{1}{2}{3}", d,a,b,c);
        Console.WriteLine("{0}{1}{2}{3}", a,c,b,d);
    }
}

