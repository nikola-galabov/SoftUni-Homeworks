using System;

class SumOf3Integers
{
    static void Main()
    {
        Console.Write("a = ");
        double firstInt = double.Parse(Console.ReadLine());
        Console.Write("b = ");
        double secondInt = double.Parse(Console.ReadLine());
        Console.Write("c = ");
        double thirdInt = double.Parse(Console.ReadLine());
        double sum = firstInt + secondInt + thirdInt;
        Console.WriteLine(sum);
    }
}

