using System;
using System.Threading;

class NumbsFrom1ToN
{
    static void Main()
    {
        Console.Write("n = ");
        int n = int.Parse(Console.ReadLine());
        int[] numbs = new int[n];
        for (int i = 0; i < numbs.Length; i++)
        {
            numbs[i] = 1 + i;
        }
        foreach (var num in numbs)
        {
            Console.WriteLine(num);
        }
    }
}

