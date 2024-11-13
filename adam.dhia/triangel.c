# include <stdio.h>

int main () {
    double a;
    double b;
    double c;
    printf("give me the first adge of the triangel\n");
    scanf("%lf %lf %lf",&a,&b,&c);
    if ((a+b>c)&&(a+c>b)&&(b+c>a)){
        printf("1\n");
    }
    else {
        printf("0\n");
    }
return 0;
}
