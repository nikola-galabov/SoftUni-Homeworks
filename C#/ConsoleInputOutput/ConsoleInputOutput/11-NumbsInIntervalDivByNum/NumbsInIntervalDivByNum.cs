using System;

class NumbsInIntervalDivByNum
{
    static void Main()
    {
        Console.Write("Start = ");
        int start = int.Parse(Console.ReadLine());
        Console.Write("End = ");
        int p = 0;
        int end = int.Parse(Console.ReadLine());
        for (int i = start; i <= end; i++)
        {
            if (i%5==0)
            {
                p++;    
            }
        }
        Console.WriteLine(p);
    }
}

