using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _02_NumbsNotDivBy3and7
{
    class Program
    {
        static void Main(string[] args)
        {
            int n = int.Parse(Console.ReadLine());
            for (int i = 0; i < n; i++)
            {
                if ((1+i)%3!=0&&(1+i)%7!=0)
                {
                    Console.WriteLine(1 + i);
                }
            }
        }
    }
}
