using System;

class ModifyBitAtPosition
{
    static void Main()
    {
        Console.Write("Please enter a number: ");
        int num = int.Parse(Console.ReadLine());
        Console.Write("Please enter a bit position: ");
        int bit = int.Parse(Console.ReadLine());
        Console.Write("0 or 1? ");
        int v = int.Parse(Console.ReadLine());
        if (v==0)
        {
            num = num & ~(1 << bit);
            Console.WriteLine(num); 
        }
        else
        {
            num = num | (1 << bit);
            Console.WriteLine(num);
        }
    }
}

