using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Numerics;

namespace _18_TrailingZerosInN
{
    class Program
    {
        static void Main(string[] args)
        {
            //int n = int.Parse(Console.ReadLine());
            //BigInteger nFact = 1;
            //for (int i = 1; i <= n; i++)
            //{
            //    nFact *= i; 
            //}
            //Console.WriteLine(nFact);
            int number = int.Parse(Console.ReadLine());
            int zeroCount = 0;
            int d;
            for (int i = 5; i <= number; i += 5)
            {
                d = i;
                while (d % 5 == 0)
                {
                    d /= 5;
                    zeroCount++;
                }
            }
            Console.WriteLine(zeroCount);
        }
    }
}
