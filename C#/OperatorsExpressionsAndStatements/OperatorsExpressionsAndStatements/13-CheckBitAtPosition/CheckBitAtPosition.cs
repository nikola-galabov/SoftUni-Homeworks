using System;

class CheckBitAtPosition
{
    static void Main()
    {
        Console.Write("Please enter a number: ");
        int num = int.Parse(Console.ReadLine());
        Console.Write("Please enter a bit position: ");
        int bit = int.Parse(Console.ReadLine());
        int mask = num & (1 << bit);
        bool result = false;
        if ((mask >> bit)==1)
        {
            result = true;
        }
        Console.WriteLine(result);
    }
}

