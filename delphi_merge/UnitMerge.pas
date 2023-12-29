unit UnitMerge;

interface

uses
  Winapi.Windows, Winapi.Messages, System.SysUtils, System.Variants, System.Classes, Vcl.Graphics,
  Vcl.Controls, Vcl.Forms, Vcl.Dialogs, Vcl.ExtCtrls;

type
  TForm10 = class(TForm)
    Image1: TImage;
    Image2: TImage;
    procedure FormCreate(Sender: TObject);
  private
    { Private declarations }
  public
    { Public declarations }
  end;

var
  Form10: TForm10;

implementation

{$R *.dfm}

const
   gap = 80;

procedure get_rgb(color:Tcolor; var R,  G,  B : byte);
begin
   R := color and $000000FF;
   G := (color and $0000FF00) shr  8;
   B := (color and $00FF0000) shr 16;
end;

function  cerca(x,bx:byte):boolean;
begin
  result := ( x >= ( bx - gap ) ) and ( x <= ( bx + gap ) );
end;

function  color_near(color,base_color:TColor):boolean;
var
  R,G,B         : byte;
  bR,bG,bB      : byte;
begin
  get_rgb(color,       R,  G,  B);
  get_rgb(base_color, bR, bG, bB);
  result := cerca(R,bR) and cerca(G,bG) and cerca(B,bB);
end;

procedure TForm10.FormCreate(Sender: TObject);
var
  Xo,Yo      : word;
  fil,col    :  word;
  color,
  base_color : TColor;

begin

   Image1.Picture.LoadFromFile('..\..\..\logo\tormenta1.bmp');


   Image1.Width   := Image1.Picture.Width;
   Image1.Height  := Image1.Picture.Height;

   Image1.Top      := 10;
   Image1.Left     := 10;


   Width          := Image1.Width  + 50;
   Height         := Image1.Height + 50;



   Image2.Picture.LoadFromFile('..\..\..\logo\logo1.bmp');
   Image2.Visible := false;

   Xo             := 350;
   Yo             := 20;
   base_color     := Image2.Canvas.Pixels[0,0];
   for fil:=0 to Image2.Picture.Height-1 do begin

       for col:=0 to Image2.Picture.Width-1 do begin

         color := Image2.Canvas.Pixels[col,fil];

         if (not color_near(color,base_color)) then begin
             Image1.Canvas.Pixels[ Xo + ( Image2.Picture.Width - col ), Yo + fil] := color;
         end;

       end;
   end;

   Image2.Picture.LoadFromFile('..\..\..\logo\texto1.bmp');
   Xo             := 0;
   Yo             := 0;
   base_color     := Image2.Canvas.Pixels[0,0];
   for fil:=0 to Image2.Picture.Height-1 do begin

       for col:=0 to Image2.Picture.Width-1 do begin

         color := Image2.Canvas.Pixels[col,fil];

         if (not color_near(color,base_color)) then begin
             Image1.Canvas.Pixels[ Xo + col, Yo + fil] := clNavy;
         end;

       end;
   end;

   Yo             := Yo + Image2.Picture.Height + 10;
   Image2.Picture.LoadFromFile('..\..\..\logo\texto2.bmp');
   base_color     := Image2.Canvas.Pixels[0,0];
   for fil:=0 to Image2.Picture.Height-1 do begin

       for col:=0 to Image2.Picture.Width-1 do begin

         color := Image2.Canvas.Pixels[col,fil];

         if (not color_near(color,base_color)) then begin
             Image1.Canvas.Pixels[ Xo + col, Yo + fil] := clDkGray;
         end;

       end;
   end;

   Image1.Picture.SaveToFile('..\..\..\logo\tormenta_logo.bmp');



   Image2.Picture.LoadFromFile('..\..\..\logo\logo_ing_base.bmp');
   base_color     := Image2.Canvas.Pixels[0,0];
   for fil:=0 to Image2.Picture.Height-1 do begin

       for col:=0 to Image2.Picture.Width-1 do begin

         color := Image2.Canvas.Pixels[col,fil];

         if (color_near(color,base_color)) then begin
             Image2.Canvas.Pixels[ col, fil] := clBlack;
         end;

       end;
   end;

   Image2.Picture.SaveToFile('..\..\..\logo\logo_ing.bmp');


end;

end.
