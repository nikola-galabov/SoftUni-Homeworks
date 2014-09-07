using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _03_MinMaxAvarageAndSumOfNumbs
{
    class Program
    {
        static void Main(string[] args)
        {
            int n = int.Parse(Console.ReadLine());
            int[] numbs = new int[n];
            for (int i = 0; i < numbs.Length; i++)
            {
                numbs[i] = int.Parse(Console.ReadLine());
            }
            int max = numbs.Max();
            int min = numbs.Min();
            double avarage = numbs.Average();
            int sum = numbs.Sum();
            Console.WriteLine("Min = {1}\nMax = {2}\nSum = {0}\nAvg = {3:F2}",sum,min,max,avarage);
        }
    }
}
