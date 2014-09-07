using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _05_Calculate
{
    class Program
    {
        static void Main(string[] args)
        {
            double n = double.Parse(Console.ReadLine());
            double x = double.Parse(Console.ReadLine());
            double factorial = 1;
            double s = 1;
            for (int i = 1; i <= n; i++)
            {
                s+=(factorial *= i)/Math.Pow(x, i);
            }
            Console.WriteLine("{0:f5}",s);
        }
    }
}
