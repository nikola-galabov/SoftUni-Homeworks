using System;

class ExtractBitFromInteger
{
    static void Main()
    {
        Console.Write("Please enter a number: ");
        int num = int.Parse(Console.ReadLine());
        Console.Write("Please enter a bit position: ");
        int bit = int.Parse(Console.ReadLine());
        int mask = num & (1<<bit);
        Console.WriteLine(mask>>bit);
    }
}

