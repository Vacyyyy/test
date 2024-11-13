#include <stdio.h>

int main() {
    int a;
    int b;
    int c;
    int werte;
    printf("give me 3 numbers");
    scanf("%d %d %d",&a,&b,&c);

    if(a!=0){
        werte=werte+1;
    }
    if (b!=0){
        werte=werte+1;
    }
    if(c!=0){
        werte=werte+1;
    }
    if(werte%2!=0){
        printf(" der eingelesenen Werte ungleich Null ist impaarnummer");

    }
    else{
        printf("der eingelesenen Werte ungleich Null ist Paarnummer");
    }
}