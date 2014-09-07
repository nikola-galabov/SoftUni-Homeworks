using System;

class BitsExchange
{
    static void Main()
    {
        uint num = uint.Parse(Console.ReadLine());
        for (int i = 0; i < 3; i++)
        {
            uint mask1 = 1;
            uint mask2 = 1;
            mask1 = mask1 <<  3 + i;
            mask2 = mask2 << 24 + i;
            mask1 = num & mask1;
            mask2 = num & mask2;
            mask1 = mask1 >> 3 + i;
            mask2 = mask2 >> 24 + i;
            if (mask1==0&&mask2==1)
            {
                num = num & (uint)(~(1 << 24 + i));
                num = num | mask2 << 3 + i;
            }
            else if (mask1==1&mask2==0)
            {
                num = num & (uint)(~(1 << 3 + i));
                num = num | mask1 << 24 + i;
            }
        }
        Console.WriteLine(num);
    }
}

