using System;

class SumOfNumbs
{
    static void Main()
    {
        Console.Write("n = ");
        int n = int.Parse(Console.ReadLine());
        double[] numbs = new double[n];
        double sum = 0;
        for (int i = 0; i < numbs.Length; i++)
        {
            numbs[i] = double.Parse(Console.ReadLine());   
        }
        sum = numbs[0];
        for (int i = 1; i < numbs.Length; i++)
        {
            sum += numbs[i];
        }
        Console.WriteLine(sum);
    }
}

