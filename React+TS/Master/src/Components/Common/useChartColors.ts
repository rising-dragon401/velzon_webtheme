import { useEffect, useState } from 'react';
import getChartColorsArray from '../Common/DynamicChartsColor';
import { useSelector } from 'react-redux';
import { createSelector } from 'reselect';

const useChartColors = (chartId: string) => {
  const [chartColors, setChartColors] = useState<string[]>([]);

  const selectLayoutState = (state: any) => state.Layout;
  const selectLayoutProperties = createSelector(
      selectLayoutState,
      (layout : any) => ({
          layoutThemeType : layout.layoutThemeType,
          layoutThemeColorType: layout.layoutThemeColorType
      })
  );
  // Inside your component
  const {
      layoutThemeType, layoutThemeColorType
  } = useSelector(selectLayoutProperties);

  useEffect(() => {
    const colors : any = getChartColorsArray(chartId);
    setChartColors(colors);
  }, [chartId, layoutThemeType, layoutThemeColorType]);

  return chartColors;
};

export default useChartColors;
