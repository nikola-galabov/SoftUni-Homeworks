using System;

class ExtractBit3
{
    static void Main()
    {
        Console.Write("Please enter a number: ");
        int num = int.Parse(Console.ReadLine());
        int mask = num&(1<<3);
        Console.WriteLine(mask>>3);
    }
}

