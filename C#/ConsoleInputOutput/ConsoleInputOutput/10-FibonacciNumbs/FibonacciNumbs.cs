using System;

class FibonacciNumbs
{
    static void Main()
    {
        Console.Write("n = ");
        int n = int.Parse(Console.ReadLine());
        int[] fibonacci = new int[n];
        fibonacci[0] = 0;
        if (n>1)
        {
            fibonacci[1] = 1;
            for (int i = 2; i < fibonacci.Length; i++)
            {
                fibonacci[i] = fibonacci[i - 1] + fibonacci[i - 2];
            }
            foreach (var num in fibonacci)
            {
                Console.Write(num+" ");
            }
            Console.WriteLine();
        }
        else
        {
            Console.WriteLine(fibonacci[0]);
        }
    }
}

